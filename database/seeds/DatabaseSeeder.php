<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call(UsersTableSeeder::class);


//        factory(\App\posts::class)->create();


        //        factory(\App\User::class)->create();


//        factory(App\posts::class, 10)->create()->each(function ($u) {
//            $u->comments()->saveMany(factory(App\comments::class, mt_rand(3, 15))->make());
//            $u->update([
//                'comment_count' => $u->comments->count()
//            ]);
//        }
//        );
        Model::reguard();
    }
}
