<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    //
    public function index(){
        $companiesOject = new companies();
        $companies = $companiesOject->paginate(15);
        return view('companies', ['companies'=> $companies]);
    }
}
