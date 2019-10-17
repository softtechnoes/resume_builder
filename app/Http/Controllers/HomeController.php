<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestComment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function comments(){
        return view('comments');
    }
    public function comment_back(Request $request){
        $post = TestComment::find(1);
        $test_comment = $request->test_comment;
        // dd($test_comment);
        $comment = $post->comment($test_comment);
        return redirect()->back()->with('message', 'Comment added Successfully');
    }
}
