<?php

namespace App\Http\Controllers;

use App\Models\SwinClub;
use App\Models\UserClub;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function Register()
    {
        $clubs = SwinClub::all();
        $user_code = auth()->user()->user_code;
        return view('admin.clubs.register', compact('clubs', 'user_code'));
    }

    public function detail(Request $request)
    {
        $club_detail = SwinClub::where('id', $request->id)->first();
        $user_club = UserClub::where('club_id', $request->id)->get();

        return view('admin.clubs.detail', compact('club_detail', 'user_club'));
    }

    public function deleteClub(Request $request)
    {
        $id = $request->id;
        $user_club = UserClub::find($id);
        $user_club->delete();

        return response()->json(['msg_delete' => 'Delete User Club Successful']);
    }

    public function storeRegister(Request $request)
    {
        $user_code = auth()->user()->user_code;
        $club_id = $request->club_id;
        UserClub::create([
            'user_code' => $user_code,
            'club_id' => $club_id,
            'status' => 0,
            'permission' => 1
        ]);
        return redirect()->route('clubs.register')->with('msg-add', 'Register Clubs Successfully');
    }
}
