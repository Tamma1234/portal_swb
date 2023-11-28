<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\Service;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function getParent() {
        $user = auth()->user();
        return view('admin.parent.index', compact('user'));
    }

    public function store(Request $request) {
        $parent_active = $request->parent_active;
        $user = auth()->user();
        $user_email = $user->user_email;
        if ($parent_active == 1) {
//            Service::getSendMail()->sendMailParent($user_email);
            $studentUser = User::where('user_code', $user->user_code)->first();
            $studentUser->parent_active = $parent_active;
            $studentUser->save();
            return response()->json(["You have successfully granted parental permissions"]);
        } else {
            $studentUser = User::where('user_code', $user->user_code)->first();
            $studentUser->parent_active = $parent_active;
            $studentUser->save();

            return response()->json(["You already have parental access"]);
        }
    }

    public function setingUpdate(Request $request) {
        $user = auth()->user();
        $data = [
            'calendar_active' => $request->calendar_active,
            'graduation_active' => $request->graduation_active,
            'event_active' => $request->event_active
        ];
        $user->fill($data);
        $user->save();
    }
}
