<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;
    protected $table = 'companies';

    public function getCompanies(){
       $companies =  $this->paginate(15);
       return $companies;
    }

    public function search($key,$categoryName){
        $result = $this->query()
            ->where('company_name','LIKE', "%{$key}%")
            ->Where('category_id','=', $categoryName)
            ->orWhere('company_phone','LIKE',"%{$key}%")
            ->orWhere('company_web','LIKE',"%{$key}%")
            ->orWhere('company_address','LIKE',"%{$key}%")
            ->orWhere('company_code','LIKE',"%{$key}%")    
            ->paginate(15);

        $result->withPath(route('searchCompanies') . "?k=" . str_replace(' ','+',$key));
        return $result;
    }
}
