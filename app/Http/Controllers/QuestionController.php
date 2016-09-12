<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
     public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
    	$myQuestion = new Question();
        $quizAll =  $myQuestion->all()->toArray();
        shuffle($quizAll);
        return view('welcome')->with('question', $quizAll);
    }

    public function question(Request $request)
    {
    	$data = $request->all();

    	$myQuestion = new Question();

    	return response()->json($myQuestion->find($data['id']));
    }

    public function edit($id = 0){
    	$myQuestion = new Question();

        return view('edit')->with('question', $myQuestion->find($id));
    }

    public function editPost($id = 0, Request $request){
    	$data = $request->all();

    	$myQuestion = new Question();
    	$myEditQuestion = $myQuestion->find($id);

    	$myEditQuestion->question = $data['question'];
    	$myEditQuestion->answer = $data['answer'];

    	$myEditQuestion->save();

        return view('edit')->with('question', $myQuestion->find($id));
    }
}
