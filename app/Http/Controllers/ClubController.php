<?php

namespace App\Http\Controllers;

use App\Models\SwClubMember;
use App\Models\SwinClub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        $id = $request->id;
        $user = auth()->user();
        $club_join_user = SwClubMember::where('club_id', $request->id)->where('user_code', $user->user_code)
            ->where('permission', 5)
            ->orWhere('permission', 1)
            ->first();

        $club_detail = SwinClub::where('id', $request->id)->first();
        $user_club = SwClubMember::where('club_id', $request->id)->get();
        // Show ra thong tin nguoi dang ky vao CLB
        $club_join = SwClubMember::where('club_id', $id)->where('permission', 1)->get();
        // Show ra thong tin nguoi roi khoi Club
        $club_leave = SwClubMember::where('club_id', $id)->where('permission', 5)->get();
        // hien thong tin dang nhap quyen chu tich Club
        $club_boss = SwClubMember::where('club_id', $id)->where('user_code', $user->user_code)
            ->where('permission', 3)->first();
        // show ra thong tin chur tich club
        $club_permission = \App\Models\SwClubMember::where('club_id', $id)
            ->where('permission', 3)->first();

        return view('admin.clubs.detail', compact('club_detail', 'user_club', 'id',
            'club_join', 'club_leave', 'club_boss', 'club_permission', 'club_join_user'));
    }

    public function deleteClub(Request $request)
    {
        $id = $request->id;
        $user_club = SwClubMember::find($id);
        $user_club->delete();

        return response()->json(['msg_delete' => 'Delete User Club Successful']);
    }

    public function storeRegister(Request $request)
    {
        $user_code = auth()->user()->user_code;
        $club_id = $request->club_id;
        SwClubMember::create([
            'user_code' => $user_code,
            'club_id' => $club_id,
            'status' => 0,
            'permission' => 1
        ]);
        return redirect()->route('clubs.register')->with('msg-add', 'Register Clubs Successfully');
    }

    public function acceptMember(Request $request) {
        $id = $request->id;
        $club = SwClubMember::find($id);
        $club->update([
            'permission' => 0
        ]);
        return Redirect::back()->with('msg-add', 'You have successfully approved');
    }

    public function leaveClub(Request $request) {
        $id = $request->id;
        $des = $request->description;
        $user = auth()->user();
        $club = SwClubMember::where('club_id', $id)->where('user_code', $user->user_code)->first();
        $club->update([
            'permission' => 5,
            'description' => $des
        ]);
        return Redirect::back()->with('msg-add', 'You have successfully submitted your request to exit the club');
    }

    public function delete(Request $request) {
        $id = $request->id;
        $club = SwClubMember::find($id);
        $club->delete();

        return Redirect::back()->with('msg-add', 'Successfully removed members from group Club');
    }
}
