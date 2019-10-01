<?php
/**
 * Created by PhpStorm.
 * User: Javad
 * Date: 28/09/2019
 * Time: 10:18 AM
 */

namespace App\Traits;


use App\Models\Category;

trait Categoraizable
{
    public function categories()
    {
        return $this->morphToMany(Category::class, "categorizable");
    }
}