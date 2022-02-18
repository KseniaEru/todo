<?php

namespace Database\Seeders;

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
       DB:table('users')->delete();
       $users=array(
           array(
               'name'=>'rarrar',
               'password'=>Hash::make{'123123'},
               'email'=>'rar@rar'
           )
           );
           DB::table('users')->insert($users);
    }
}
