<?php
/**
 * Created by PhpStorm.
 * User: Javad
 * Date: 29/09/2019
 * Time: 10:08 AM
 */

namespace App\Utility;


use App\Models\Subscribe;
use Carbon\Carbon;

class User
{
    public static function is_user_subscribe(int $user_id = null): bool
    {
        $user = \App\User::find($user_id);
        if (!$user) {
            return false;
        }
        $user_subscribe = $user->subscribes()->first();
        return !empty($user_subscribe);
    }
}