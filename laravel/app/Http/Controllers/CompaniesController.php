<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    //
    public function index(){
        $companiesOject = new Companies();
        $companies = $companiesOject->getCompanies();
        return view('companies', ['companies'=> $companies]);
    }
}
