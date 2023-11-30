<?php

namespace App\Http\Controllers;

use App\Events\HelloPusherEvent;
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
        event(new HelloPusherEvent($request));
        dd(3211);
        // file images
        $targetDir = 'temp';
        $fileName = $request->file->getClientOriginalName();
        if ($fileName != "") {
            $targetFilePath = $targetDir."-".$user_code."-".$fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

            $allowTypes = array('jpg','png','jpeg','gif','pdf','JPG','PNG','JPEG','GIF','PDF','doc','DOC','docx','DOCX');
            $targetFilePath2 = "http://127.0.0.1:8000/queries/".$targetFilePath;
            if (in_array($fileType, $allowTypes)) {
                $fileGllery = $request->file->move('queries', $targetFilePath);
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
            'file_name' => $targetFilePath
        ];
        $query->fill($data);
        $query->save();
        $id = $query->id;
        $queryFill = Queries::find($id);

        $queries = new QuerisCommunicate();
        $queries->insert([
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

    public function detailQuery(Request $request) {
        $id = $request->id;
        $query = QuerisCommunicate::where('queries_id', $id)->get();
        return view('admin.queries.detail', compact('query', 'id'));
    }

    public function queryUpdate(Request $request) {
        $id = $request->id;
        $queries = Queries::find($id);
        $queries->update([
            'note_xu_ly' => $request->content
        ]);
        $user = auth()->user();
        $user_login = $user->user_login;
        $user_code = $user->user_code;
        $targetDir = 'temp';
        if ($request->hasFile('file')) {
            $fileName = $request->file->getClientOriginalName();
            $targetFilePath = $targetDir."-".$user_code."-".$fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            $allowTypes = array ('jpg','png','jpeg','gif','pdf','JPG','PNG','JPEG','GIF','PDF','doc','DOC','docx','DOCX');
            $targetFilePath2 = "http://127.0.0.1:8000/queries/".$targetFilePath;
            if (in_array($fileType, $allowTypes)) {
                $fileGllery = $request->file->move('queries', $targetFilePath);
            }
        } else {
            $targetFilePath2 = '';
        }
        $query = new QuerisCommunicate();
        $query->insert([
            'queries_id' => $id,
            'content' => $request->content,
            'file_name' => $targetFilePath2,
            'queries_status' => $queries->queries_status,
            'create_by' => $user_login
        ]);

        return redirect()->route('queries.history')->with('msg-add', 'query sent successfully');
    }
}
