<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

class ExperienceController extends Controller
{
    public function addExperience(Request $request){
      
        $requestdata['user_id']               = Auth::user()->id;
        $requestdata['company']               = $request->company;
        $requestdata['role']                  = $request->role;
        $requestdata['from']                  = $request->from;
        $requestdata['to']                    = $request->to;
        $requestdata['sallery']               = $request->sallery;
        $requestdata['description']           = $request->description;
        $requestdata['city']                  = $request->city;
        // dd($request->role);
        $exp_id=$request->exp_id;
        if (Experience::where('id', $exp_id)->exists()) {
            $updateExperience = Experience::where('id',$exp_id)->update($requestdata);
            return response()->json([$requestdata]);
        }
        else{
            $addExperience = Experience::create($requestdata);
            return response()->json($requestdata);
        }
    }
}
