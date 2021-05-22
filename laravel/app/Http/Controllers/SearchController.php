<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Trainers;
use Illuminate\Http\Request;
use App\Models\Companies;
class SearchController extends Controller
{
    //
    public function search(Request $request){
        $categoryModel = new Categories();
        $categories = $categoryModel->getPluckCategories();

        if($request->input('k')){
            $key = $request->input('k');
            $trainers = new Trainers();
            $result = $trainers->search($key);
            return view('search',[
                'result' => $result,
                'key' => $key,
                'categories' => $categories
                ]);
        }
        return view('search',['categories' => $categories]);
    }

    function searchCompanies(Request $request){
        $categoryModel = new Categories();
        $categories = $categoryModel->getPluckCategories();

        if($request->input('k') || $request->input('categoryName')){
            $key = $request->input('k');
            $categoryName = $request->input('categoryName');
            $companyModel = new Companies();
            $result = $companyModel->search($key, $categoryName);

            return view('search_companies',[
                'companies' => $result,
                'key' => $key,
                'categories' => $categories
                ]);
        }
        
        return view('search_companies',['categories' => $categories]);
    }

}
