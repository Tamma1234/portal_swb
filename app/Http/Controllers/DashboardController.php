<?php

namespace App\Http\Controllers;

use App\Models\Dra\GroupMember;
use App\Models\Dra\StudentSubject;
use App\Models\EventSwin;
use App\Models\Fu\Acitivitys;
use App\Models\Fu\Attendance;
use App\Models\Fu\Slot;
use App\Models\Fu\Subjects;
use App\Models\Fu\Term;
use App\Models\Queries;
use App\Models\T7\CourseResult;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $events = EventSwin::all();

        $student_subject = StudentSubject::join('fu_user', 'dra_student_subject.student_login', '=', 'fu_user.user_login')
            ->where('dra_student_subject.student_login', '=', 'fu_user.user_login')
            ->select('dra_student_subject.subject_id')
            ->get();
        $comment = Queries::where('user_login', $user->user_login)->get();
        $group_member = GroupMember::where('member_login', $user->user_login)->get();
        $countGroup = count($group_member);

        return view('admin.dashboard.index', compact('user', 'countGroup', 'events', 'comment'));
    }

    public function listGroup()
    {
        $user = auth()->user();
        $group_member = CourseResult::where('student_login', $user->user_login)
            ->get();
        $subject = new Subjects();
        return view('admin.dashboard.list-group', compact('group_member', 'subject'));
    }

    public function profile() {
        $user = auth()->user();
        return view('admin.dashboard.profile', compact('user'));
        }

    public function getAcademic()
    {
        return view('admin.notifications.academic');
    }

    public function getActivities()
    {
        return view('admin.notifications.activities');
    }

    public function getFees()
    {
        return view('admin.notifications.fees');
    }

    public function schedule()
    {
        $user_logins = auth()->user()->user_login;
        $list_group = CourseResult::where("student_login", $user_logins)
            ->select("groupid", "psubject_code", "pterm_name")
            ->get();

        $data = [];
        foreach ($list_group as $gi) {
            $group_id = $gi->groupid;
            $subject_code = $gi->psubject_code;
            $term_name = $gi->pterm_name;
            $ds_activity = Acitivitys::where("groupid", $group_id)
                ->select("day", "session_check")
                ->distinct()
                ->get();
            foreach ($ds_activity as $activity) {
                $day = $activity->day;
                $session_check = $activity->session_check;
                $activity_ids = Acitivitys::where('groupid', $group_id)
                    ->where('day', $day)
                    ->where('session_check', $session_check)
                    ->select('id')
                    ->orderBy('slot', 'ASC')
                    ->first();

                $activity_id = $activity_ids->id;
                $room_names = Acitivitys::where('id', $activity_id)
                    ->select('room_name', 'psubject_name')
                    ->first();
                $room_name = $room_names->room_name;
                $subject_name = $room_names->psubject_name;
                $s_start = Slot::join('fu_activity', 'fu_slot.slot_id', '=', 'fu_activity.slot')
                    ->where('fu_activity.groupid', $group_id)
                    ->where('fu_activity.day', $day)
                    ->where('fu_activity.session_check', $session_check)
                    ->select('fu_slot.slot_start', 'fu_activity.slot')
                    ->orderBy('fu_activity.slot', 'ASC')->first();

                $slot_start_id = $s_start->slot;
                $slot_start = $s_start->slot_start;

                $s_end = Slot::join('fu_activity', 'fu_slot.slot_id', '=', 'fu_activity.slot')
                    ->where('fu_activity.groupid', $group_id)
                    ->where('fu_activity.day', $day)
                    ->where('fu_activity.session_check', $session_check)
                    ->select('fu_slot.slot_end', 'fu_activity.slot')
                    ->orderBy('fu_activity.slot', 'DESC')
                    ->first();

                $slot_end_id = $s_end->slot;
                $slot_end = $s_end->slot_end;
                $start = substr($slot_start, 0, -3);
                $end = substr($slot_end, 0, -3);
//                $start=$slot_start;
//                $end=$slot_end;
                if ($subject_code == 'ENL101' || $subject_code == 'ENL102' || $subject_code == 'ENL201' || $subject_code == 'ENL202' || $subject_code == 'ENL301' || $subject_code == 'ENL302') {
                    if ($slot_start_id == 1) {
                        $start = '07:30:00';
                    }
                    if ($slot_start_id == 2) {
                        $start = '08:30:00';
                    }
                    if ($slot_start_id == 3) {
                        $start = '09:30:00';
                    }
                    if ($slot_end_id == 8) {
                        $end = '17:30:00';
                    }
                    if ($slot_start_id == 8) {
                        $start = '15:30:00';
                    }
                }

                $day_st = $activity->day . " " . "$start";
                $day_end = $activity->day . " " . "$end";
                $title = "Group:" . ' ' . $subject_code . '-' . $term_name;
                $des = "Room: " . $room_name . " - Subject: " . $subject_name . " (" . $subject_code . ")";
                $today = date('Y-m-d');
                if ($today > $activity->day) {
                    $class_name = "fc-event-light fc-event-solid-success";
                } elseif ($today == $activity->day) {
                    $class_name = "fc-event-light fc-event-solid-danger";
                } else {
                    $class_name = "fc-event-light fc-event-solid-primary";
                }
                $fu_subject = Subjects::where('subject_code', $subject_code)
                    ->select('is_major')
                    ->first();

                $data[] = [
                    'title' => $title,
                    'start' => $day_st,
                    'description' => $des,
                    'end' => $day_end,
                    'className' => $class_name,
                    'allDay' => false,
                ];
            }
        }
        return response()->json($data);
    }

    public function listSchedule()
    {
        return view('admin.calendar.schedule');
    }

    public function getAttendance()
    {
        $user = auth()->user();
        $terms = Term::all();

        if (isset($_GET['term_name'])) {
            $term_name = $_GET['term_name'];
            $listAttendances = CourseResult::where('student_login', $user->user_login)
                ->where('pterm_name', $term_name)
                ->select('groupid', 'psubject_name', 'student_login', 'total_session', 'attendance_absent')
                ->get();

            $attendance = new Attendance();
            $slot = new Slot();
            return view('admin.calendar.attendance', compact('terms', 'listAttendances', 'attendance', 'slot', 'term_name'));
        }
        $term_name = "";
        $listAttendances = "";
        return view('admin.calendar.attendance', compact('terms', 'listAttendances', 'term_name'));
    }
}
