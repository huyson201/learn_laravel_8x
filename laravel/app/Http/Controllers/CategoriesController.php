<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    //
    function index(){
        $categoriesModel = new Categories();
        $categories = $categoriesModel->getAllCategories();
        return view('categories',[
            'categories' => $categories
        ]);
    }

    function detail($name){
        echo $name;
    }
}
