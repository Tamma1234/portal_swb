<?php

namespace App\Http\Controllers;

use App\Models\Ktp\Subject;
use Illuminate\Http\Request;

class KTPController extends Controller
{
    public function index() {
        $ktpSubjects = Subject::all();
        return view('admin.ktp_subject.index', compact('ktpSubjects'));
    }
}
