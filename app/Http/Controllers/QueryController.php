<?php

namespace App\Http\Controllers;

use App\Http\Requests\QueryRequest;
use App\Models\Queries;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function index()
    {
        $queries = Queries::all();
        return view('admin.queries.index');
    }

    public function sendQueries(QueryRequest $request)
    {
        $user = auth()->user();
        $user_login = $user->user_login;
        $user_code = $user->user_code;
        $question = $request->question;
        $queries_type = $request->waye;
//        $originalFileName = $request->file->getClientOriginalName();
//        $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
//        $file_image = $request->file('file')->storeAs('images', $fileName, 'public');
        $name =  $request->file('file')->store('images');
        $query = new Queries();
        $data = [
            'user_login' => $user_login,
            'user_code' => $user_code,
            'queries_type' => $queries_type,
            'question' => $question,
            'file_name' => $name,
            'querries_status' => 'New',
            'phone' => $user->user_telephone,
            'address' => $user->address,
            'email' => $user->user_email,
            'time_xu_ly' => "",
            'note_xu_ly' => "",
            'nguoi_xu_ly' => ""
        ];
        $query->fill($data);
        $query->save();
        $id = $query->id;
        dd($id);
        return redirect()->route('queries.history')->with('msg', 'query sent successfully');
    }

    public function getHistoryQuery()
    {
        $user = auth()->user();
        $queries = Queries::where('user_login', $user->user_login)->get();
        return view('admin.queries.history-query', compact('queries'));
    }
}
