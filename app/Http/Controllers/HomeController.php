<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestComment;
use App\Highschool;
use App\Intermediate;
use App\Graduation;
use App\Master;
use App\Diploma;
use App\EducationBoards;
use App\Experience;
use App\Skills;
use App\User;
use App\State;
use App\College;
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
        // dd($master);
        $diploma = Diploma::where('user_id',$id)->get()->toArray();
        $experience = Experience::where('user_id',$id)->get();
        $professional_skills = Skills::where('user_id',$id)->where('skill_type','professional')->get()->toArray();
        $personal_skills = Skills::where('user_id',$id)->where('skill_type','personal')->get()->toArray();
        $boards=EducationBoards::all();
        $states_stable=State::all();
        $colleges=College::get();
        // dd($experience);
        return view('home',compact('high_school','intermediate','graduation','master','diploma','experience','professional_skills','personal_skills','boards','states_stable','colleges'));
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
    public function addAbout(Request $request){
        $id    = Auth::user()->id;
        $about   = $request->about;
       // dd($requestdata);
        $edittransationlist = User::where('id',$id)->update(['about'=>$about]);
        return redirect()->back()->with('message', __('Hours added Successfully')); 
    }
    public function addHighSchool(Request $request){
        // $school_name=$request->school_name;
        // $board=$request->board;
        // $state=$request->state;
        // $passing_year=$request->passing_year;
        // $percentage=$request->percentage;
        // $school_address=$request->school_address;

        //$high_school = Highschool::get();

        

        $requestdata['user_id']             = Auth::user()->id;
        $requestdata['school_name']         = $request->school_name;
        $requestdata['board_name']          = $request->board;
        $requestdata['state']               = $request->state;
        $requestdata['passing_year']        = $request->passing_year;
        $requestdata['percentage']          = $request->percentage;
        $requestdata['school_address']      = $request->school_address;

        $high_school_id=$request->high_school_id;
        $board_id= $request->board_id;
        $state_id=$request->state_id;
        if (Highschool::where('id', $high_school_id)->exists()) {
            $updatehighschool = Highschool::where('id',$high_school_id)->update($requestdata);
            $board=EducationBoards::where('id',$board_id)->get()->toArray();
            $state=State::where('id',$state_id)->get()->toArray();
            return response()->json([$requestdata,$board[0]['board_name'],$state[0]['name']]);
        }
        else{
            $addhighschool = Highschool::create($requestdata);
            return response()->json($requestdata);
        }
    } 
    public function addIntermediate(Request $request){
        $requestdata['user_id']             = Auth::user()->id;
        $requestdata['school_name']         = $request->school_name;
        $requestdata['board_name']          = $request->board;
        $requestdata['state']               = $request->state;
        $requestdata['passing_year']        = $request->passing_year;
        $requestdata['percentage']          = $request->percentage;
        $requestdata['school_address']      = $request->school_address;

        $intermediate_id=$request->intermediate_id;
        $board_id= $request->board_id;
        $state_id=$request->state_id;
        if (Intermediate::where('id', $intermediate_id)->exists()) {
            $updateIntermediate = Intermediate::where('id',$intermediate_id)->update($requestdata);
            $board=EducationBoards::where('id',$board_id)->get()->toArray();
            $state=State::where('id',$state_id)->get()->toArray();
            return response()->json([$requestdata,$board[0]['board_name'],$state[0]['name']]);
        }
        else{
            $addIntermediate = Intermediate::create($requestdata);
            return response()->json($requestdata);
        }
    }
    public function addGraduation(Request $request){
        //dd('test');
        $requestdata['user_id']                  = Auth::user()->id;
        $requestdata['course_name']              = $request->course_name;
        $requestdata['college']                  = $request->college_name;
        $requestdata['university']               = $request->university;
        $requestdata['state']                    = $request->state;
        $requestdata['passing_year']             = $request->passing_year;
        $requestdata['percentage']               = $request->percentage;
        $requestdata['from']                     = $request->from;
        $requestdata['to']                       = $request->to;
        $requestdata['college_address']          = $request->college_address;
        $requestdata['specialization']           = $request->spcialization;

        
        $grad_id=$request->grad_id;
        $state_id=$request->state;
        if (Graduation::where('id', $grad_id)->exists()) {
            $updateGraduation = Graduation::where('id',$grad_id)->update($requestdata);
            $state=State::where('id',$state_id)->get()->toArray();
            return response()->json([$requestdata,$state[0]['name']]);
        }
        else{
            $addGraduation = Graduation::create($requestdata);
            return response()->json($requestdata);
        }
    }
    public function addMaster(Request $request){
        $requestdata['user_id']                  = Auth::user()->id;
        $requestdata['course_name']              = $request->course_name;
        $requestdata['college']                  = $request->college_name;
        $requestdata['university']               = $request->university;
        $requestdata['state']                    = $request->state;
        $requestdata['passing_year']             = $request->passing_year;
        $requestdata['percentage']               = $request->percentage;
        $requestdata['from']                     = $request->from;
        $requestdata['to']                       = $request->to;
        $requestdata['college_address']          = $request->college_address;
        $requestdata['specialization']           = $request->spcialization;

        
        $master_id=$request->master_id;
        $state_id=$request->state;
        if (Master::where('id', $master_id)->exists()) {
            $updateMaster = Master::where('id',$master_id)->update($requestdata);
            $state=State::where('id',$state_id)->get()->toArray();
            return response()->json([$requestdata,$state[0]['name']]);
        }
        
        else{
            $addMaster = Master::create($requestdata);
            return response()->json($requestdata);
        }
    }
    public function addDiploma(Request $request){
        $requestdata['user_id']                  = Auth::user()->id;
        $requestdata['course_name']              = $request->course_name;
        $requestdata['college']                  = $request->college_name;
        $requestdata['university']               = $request->university;
        $requestdata['state']                    = $request->state;
        $requestdata['passing_year']             = $request->passing_year;
        $requestdata['percentage']               = $request->percentage;
        $requestdata['from']                     = $request->from;
        $requestdata['to']                       = $request->to;
        $requestdata['college_address']          = $request->college_address;
        $requestdata['specialization']           = $request->spcialization;

        $diploma_id=$request->diploma_id;
        $state_id=$request->state;
        if (Diploma::where('id', $diploma_id)->exists()) {
            $updateDiploma = Diploma::where('id',$diploma_id)->update($requestdata);
            $state=State::where('id',$state_id)->get()->toArray();
            return response()->json([$requestdata,$state[0]['name']]);
        }
        else{
            $addDiploma = Diploma::create($requestdata);
            return response()->json($requestdata);
        }
    }
}
