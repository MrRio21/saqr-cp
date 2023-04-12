<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\commonQuestions;
use Illuminate\Http\Request;

class CommonQuestionsController extends Controller
{
        public function index()
    {
        $commonQuestions = commonQuestions::all();
        return response()->json(['data'=>$commonQuestions]);
    }
}
