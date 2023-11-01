<?php

namespace App\Http\Controllers;

use App\Models\Fu\Categories;
use App\Models\Fu\Content;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index() {
        $cates = Categories::all();
        $content = new Content();
        return view('admin.notifications.index', compact('cates', 'content'));
    }

    public function detailNotification(Request $request) {
        $detail = Content::find($request->id);
        return view('admin.notifications.content-detail', compact('detail'));
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

    public function getParent() {
        return view('admin.parent.index');
    }
}
