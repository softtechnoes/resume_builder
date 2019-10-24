<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestComment;
use App\Highschool;
use App\Intermediate;
use App\Graduation;
use App\Master;
use App\Diploma;
use Illuminate\Support\Facades\Auth;

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
        $id=Auth::user()->id;
        $high_school = Highschool::where('user_id',$id)->get()->toArray();
        $intermediate = Intermediate::where('user_id',$id)->get()->toArray();
        $graduation = Graduation::where('user_id',$id)->get()->toArray();
        $master = Master::where('user_id',$id)->get()->toArray();
        $diploma = Diploma::where('user_id',$id)->get()->toArray();
        // dd(count($master));
        return view('home',compact('high_school','intermediate','graduation','master','diploma'));
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
