<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(\App\posts::class, function ($faker) {
    return [
        'title' => $faker->sentence,
        'read_more' => $faker->paragraph(1),
        'content' => $faker->paragraph,
        'user_id' => 1

    ];
});
$factory->define(\App\comments::class, function ($faker) {
    return [
        'commenter' => $faker->sentence,
        'comment' => $faker->paragraph,
        'email' => $faker->email,
//        'comment_count' => 1,
        'approved' => 1

    ];
});

