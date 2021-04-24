<?php

namespace App\Http\Controllers;

use App\Models\Trainers;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        if($request->input('k')){
            $key = $request->input('k');
            $trainers = new Trainers();
           
            $result = $trainers->query()
                            ->where('trainer_name','LIKE', "%{$key}%")
                            ->orWhere('trainer_phone','LIKE',"%{$key}%")
                            ->orWhere('trainer_email','LIKE',"%{$key}%")
                            ->paginate(15);
        
            $result->withPath(route('search') . "?k=" . str_replace(' ','+',$key));
            

            return view('search',['result' => $result, 'key' => $key]);
        }
        return view('search',[]);
    }
}
