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


}
