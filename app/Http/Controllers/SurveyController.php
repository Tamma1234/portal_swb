<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\questions;
use App\Models\Surveys;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;

class SurveyController extends Controller
{
    public function index()
    {
        $surveys = Surveys::all();
        return view('admin.survey.index', compact('surveys'));
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $survey = Surveys::find($id);
        $questions = questions::where('parent_id', 0)->get();
        return view('admin.survey.detail', compact('questions', 'survey'));
    }

    public function store(Request $request)
    {

//        $request->validate([
//            'answer' => 'required',
//            'title_job' => 'required',
//            'company' => 'required',
//            'industry' => 'required',
//            'file' => 'required',
//        ]);
        $user_code = auth()->user()->user_code;
        $survey_id = $request->id;
        $answers = $request->answer;
        $title_job = $request->title_job;
        $company = $request->company;
        $industry = $request->industry;
        $question_answer_id = 2;
//        $fileId = "";
//        if ($request->hasFile('file')) {
//            $file = $request->file('file');
//            $driveFolderId = config('services.google.drive_folder_id_survey');
//            $client = new Google_Client();
//            $client->setAuthConfig(config('services.google.credentials_path'));
//            $extension = $request->file('file')->getClientOriginalExtension();
//            $client->addScope(Google_Service_Drive::DRIVE);
//
//            $drive = new Google_Service_Drive($client);
//            $newFileName = $user_code . '_' . 'CV'. '.' . $extension;
//            $fileMetadata = new Google_Service_Drive_DriveFile([
//                'name' => $newFileName,
//                'parents' => [$driveFolderId],
//            ]);
//            $content = file_get_contents($file->getRealPath());
//            $driveFile = $drive->files->create($fileMetadata, [
//                'data' => $content,
//                'mimeType' => $file->getClientMimeType(),
//                'uploadType' => 'multipart',
//            ]);
//            // Lấy ID của file mới tạo trên Google Drive
//            $fileId = $driveFile->id;
////            return response()->json(['id' => $fileId]);
////            $originalFileName = $request->image_url->getClientOriginalName();
////            $path = Storage::disk("google")->putFileAs("", $request->file('image_url'), $originalFileName);
////            $fileName = \Storage::disk("google")->getMetadata($path)['path'];
//        }
//        $data = [];
//        foreach ($answers as $question_id => $answer_id) {
//            $answer = questions::find($answer_id)->name;
//            $data[] = [
//                'survey_id' => $survey_id,
//                'user_code' => $user_code,
//                'question_id' => $question_id,
//                'answers' => $answer
//            ];
//        }
//        $data[] = [
//            'survey_id' => $survey_id,
//            'user_code' => $user_code,
//            'question_id' => $question_answer_id,
//            'answers' => $title_job
//        ];
//
//        $data[] = [
//            'survey_id' => $survey_id,
//            'user_code' => $user_code,
//            'question_id' => $question_answer_id,
//            'answers' => $company
//        ];
//
//        $data[] = [
//            'survey_id' => $survey_id,
//            'user_code' => $user_code,
//            'question_id' => $question_answer_id,
//            'answers' => $industry
//        ];
//        $data[] = [
//            'survey_id' => $survey_id,
//            'user_code' => $user_code,
//            'question_id' => 6,
//            'answers' => $fileId
//        ];
//        Answers::insert($data);
        return redirect()->route('survey.responses')->with('success', '<p class="font-weight-bold">Graduation  marks the beginning of a new chapter of success!</p>
<span class="font-weight-bold">Join Swinburne Vietnam alumni network to receive exclusive benefits and further career development opportunities. Connect with us:</span><br>
Alumni Private Group: <a href="https://www.facebook.com/share/MDHaLA6tQcZ5pUfE/?mibextid=K35XfP" target="_blank">https://www.facebook.com/share/MDHaLA6tQcZ5pUfE/?mibextid=K35XfP</a><br>
Facebook Page: <a href="https://www.facebook.com/people/Swinburne-Vietnam-Alumni/61552920658658/" target="_blank">https://www.facebook.com/people/Swinburne-Vietnam-Alumni/61552920658658/</a><br><br>
<span class="font-weight-bold"> Thank you for participating in this survey. Your input is invaluable in helping us support your career.</span>');
    }

    public function responses() {
        $user_code = auth()->user()->user_code;
        $answers = Answers::where('user_code', $user_code)->get();
        return view('admin.survey.response', compact('answers'));
    }
}
