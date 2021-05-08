<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    //
    public function index(){
        $companiesOject = new companies();
        $companies = $companiesOject->getCompanies();
        return view('companies', ['companies'=> $companies]);
    }
}
