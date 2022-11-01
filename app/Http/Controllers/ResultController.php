<?php

namespace App\Http\Controllers;

use App\Models\Dra\PeriodSubject;
use App\Models\T7\CourseResult;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function listGrade()
    {
        $user = auth()->user();
        $user_login = $user->user_login;
        $curriculum_id = $user->curriculum_id;
        $coureResult = new CourseResult();
        $listCurriculumCore = PeriodSubject::where('curriculum_id', $curriculum_id)
            ->where('subject_type', 'LIKE', '%Core%')
            ->get();
        $listCurriculumMajor = PeriodSubject::where('curriculum_id', $curriculum_id)
            ->where('subject_type', 'LIKE', '%Major%')
            ->get();
        $listCurriculumElective = PeriodSubject::where('curriculum_id', $curriculum_id)
            ->where('subject_type', 'LIKE', '%Elective%')
            ->get();

        return view('admin.result.study-plan', compact('listCurriculumCore',
            'listCurriculumMajor', 'listCurriculumElective', 'coureResult', 'user_login'));
    }
}
