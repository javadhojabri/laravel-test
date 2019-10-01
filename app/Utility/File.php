<?php
/**
 * Created by PhpStorm.
 * User: Javad
 * Date: 30/09/2019
 * Time: 09:55 AM
 */

namespace App\Utility;


use App\Models\Subscribe;

class File
{
    public static function user_can_download_file($user_id)
    {
        if (!User::is_user_subscribe($user_id)) {
            return false;
        }
        $user = \App\User::find($user_id);
        $usersubscribe = $user->currentsubscribe()->first();
        if (!$usersubscribe) {
            return false;
        }
        if ($usersubscribe->subscribe_download_count == $usersubscribe->subscribe_download_limit) {
            return false;
        }
        return true;
    }
}