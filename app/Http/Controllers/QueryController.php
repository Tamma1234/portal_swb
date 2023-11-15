<?php

namespace App\Http\Controllers;

use App\Http\Requests\QueryRequest;
use App\Models\Queries;
use App\Models\QuerisCommunicate;
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

        // file images
        $targetDir = 'temp/';
        $fileName = $request->file->getClientOriginalName();
        if ($fileName != "") {
            $targetFilePath = $targetDir."-".$user_code."-".$fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            $allowTypes = array('jpg','png','jpeg','gif','pdf','JPG','PNG','JPEG','GIF','PDF','doc','DOC','docx','DOCX');
            $targetFilePath2 = "https://portal.swin.edu.vn/students/".$targetFilePath;
            if (in_array($fileType, $allowTypes)) {

            }

        } else {
            $targetFilePath2 = '';
        }
        $query = new Queries();
        $data = [
            'user_login' => $user_login,
            'user_code' => $user_code,
            'queries_type' => $queries_type,
            'question' => $question,
            'queries_status' => 'New',
        ];
        $query->fill($data);
        $query->save();
        $id = $query->id;
        $queryFill = Queries::find($id);

        $query = new QuerisCommunicate();
        $query->insert([
            'queries_id' => $id,
            'content' => "",
            'file_name' => $targetFilePath2,
            'queries_status' => $queryFill->queries_status,
            'create_by' => $user_login
        ]);

        return redirect()->route('queries.history')->with('msg', 'query sent successfully');
    }

    public function getHistoryQuery()
    {
        $user = auth()->user();
        $queries = Queries::where('user_login', $user->user_login)->get();
        return view('admin.queries.history-query', compact('queries'));
    }
}
