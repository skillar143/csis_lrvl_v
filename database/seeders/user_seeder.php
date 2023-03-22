<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $password = Hash::make('password');

        //admin
        $user = new User(["name"=> "Admin", "email" => "admin@test.com","password" => "$password"]); 
        $user->save();
        $user->attachRole('1');
        event(new Registered($user));

        //test faculty
        $user = new User(["name"=> "Faculty", "email" => "faculty@test.com","password" => "$password"]); 
        $user->save();
        $user->attachRole('2');
        event(new Registered($user));

        //test student
        $user = new User(["name"=> "Student", "email" => "student@test.com","password" => "$password"]); 
        $user->save();
        $user->attachRole('3');
        event(new Registered($user));
    }
}
