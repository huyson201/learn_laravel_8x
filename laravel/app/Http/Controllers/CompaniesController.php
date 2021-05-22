<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    //
    public function index(){
        $companiesObject = new Companies();
        $companies = $companiesObject->paginate(15);
        return view('companies', ['companies'=> $companies]);
    }
}
