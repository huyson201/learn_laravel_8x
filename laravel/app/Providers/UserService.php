<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserService
{
    /**
     * get all user from database
     */
    public function getAll()
    {
        return DB::table('users')->select()->get();
    }
}
