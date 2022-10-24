<?php

namespace App\Http\Controllers;

use App\Models\Fu\Campus;
use App\Models\User;
use App\Models\Younger;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->connection = $_GET['campus_id'];
//    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {
        $campus = Campus::select('id', 'campus_code', 'campus_name')->get();
        $campus_id = "";
        if (isset($_GET['campus_id'])) {
            $array_campus = config('localStorage')->campus;
            $campus_id = $_GET['campus_id'];
            if (!$campus_id) {
                return redirect()->route('home');
            } else if (!in_array($campus_id, $array_campus)) {
                return redirect()->route('home');
            }
            session(['campus_db' => $campus_id]);
        }
        return view('admin.auth.login', compact('campus', 'campus_id'));
    }
}
