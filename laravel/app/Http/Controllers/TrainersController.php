<?php

namespace App\Http\Controllers;

use App\Models\Trainers;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    //
    public function index(){
        $trainers = Trainers::paginate(10);
        return view('trainers',['trainers' => $trainers]);
    }
    public function search(Request $request)
    {
        if($request->input('k')){
            $key = $request->input('k');
            $trainers = Trainers::query()
                                        ->where('trainer_name','=',$key)
                                        ->orWhere('trainer_phone','=',$key)
                                        ->orWhere('trainer_email','=',$key)
                                        ->get();
                ;
             return view('trainers',['trainers' => $trainers]);
            //return $key;
        }
        return view('search',[]);
    }
}
