<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    use HasFactory;
    protected $table = 'trainers';

    public function search($key)
    {
            $trainers = $this->query()
                        ->where('trainer_name','LIKE', "%{$key}%")
                        ->orWhere('trainer_phone','LIKE',"%{$key}%")
                        ->orWhere('trainer_email','LIKE',"%{$key}%")
                        ->paginate(15);
            $trainers->withPath(route('search') . "?k=" . str_replace(' ','+',$key));
            return $trainers;
            //return $key;
    }
}
