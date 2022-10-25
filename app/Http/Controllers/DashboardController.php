<?php

namespace App\Http\Controllers;

use App\Models\dra\GroupMember;
use App\Models\dra\StudentSubject;
use App\Models\Fu\Subjects;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
        public function index() {
            $user = auth()->user();
            $student_subject = StudentSubject::join('fu_user', 'dra_student_subject.student_login', '=', 'fu_user.user_login')
            ->where('dra_student_subject.student_login', '=', 'fu_user.user_login')
            ->select('dra_student_subject.subject_id')
            ->get();
            $group_member = GroupMember::where('member_login', $user->user_login)->get();
            $countGroup = count($group_member);

            return view('admin.dashboard.index', compact('user', 'countGroup'));
        }

        public function listGroup() {
            $user = auth()->user();
            $group_member = GroupMember::join('fu_subject', 'fu_group_member.subject_code', '=', 'fu_subject.subject_code')
            ->where('member_login', $user->user_login)
            ->get();
            return view('admin.dashboard.list-group', compact('group_member'));
        }
}
