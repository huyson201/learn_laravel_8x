<?php

namespace App\Providers;

use RuntimeException;

/**
 * @method static App\Providers\UserService|null getAll()
 */
class MyUser extends MyFacade
{
    /**
     * getFacadeAccessor
     */
    public static function getFacadeAccessor()
    {
        return 'UserService';
    }
}
