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

       // admin
        $user = new User(["name"=> "Admin", "username"=> "admin", "email" => "admin@test.com","password" => "$password"]); 
        $user->save();
        $user->attachRole('1');
        event(new Registered($user));

        //test faculty
        $user = new User(["name"=> "Faculty", "username"=> "faculty", "email" => "faculty@test.com","password" => "$password"]); 
        $user->save();
        $user->attachRole('2');
        event(new Registered($user));

        //test student
        $user = new User(["name"=> "Student", "username"=> "student", "email" => "student@test.com","password" => "$password"]); 
        $user->save();
        $user->attachRole('3');
        event(new Registered($user));

        /** faculty user seeder */
        $user = new User(["name"=> "Lucila M. Bujactin", "username"=> "FCF001", "email" => "FCF001@test.com" ,"password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Carmen A. Perdiguez", "username"=> "FCF002", "email" => "FCF002@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Josephine V. Paet", "username"=> "FCF003", "email" => "FCF003@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Kathleen B. Corcolon", "username"=> "FCF004", "email" => "FCF004@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Vivian P. Lajara", "username"=> "FCF005", "email" => "FCF005@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Girlie Mannphy Lacambra", "username"=> "FCF006", "email" => "FCF006@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Sandy Dan", "username"=> "PCF007", "email" => "PCF007@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Apple Cherry T. Devera", "username"=> "PCF008", "email" => "PCF008@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Ruth R. Dionela", "username"=> "PCF009", "email" => "PCF009@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Arlene E. Flores", "username"=> "PCF010", "email" => "PCF010@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Judith C. Garcia", "username"=> "PCF011", "email" => "PCF011@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Maria Lucia  Aileen L. Juaneza", "username"=> "PCF012", "email" => "PCF012@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Dexter F. Pagkaliwagan", "username"=> "PCF013", "email" => "PCF013@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Arlene Pondevida", "username"=> "PCF014", "email" => "PCF014@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Noraida G. Salvosa", "username"=> "PCF015", "email" => "PCF015@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Ryan P. Suministrad", "username"=> "PCF016", "email" => "PCF016@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Sr. Rowena Garcia FdCC", "username"=> "PCF017", "email" => "PCF017@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Sr. Lina L. Amante FdC", "username"=> "PCF018", "email" => "PCF018@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Sr. Rita Nedtran FdCC", "username"=> "PCF019", "email" => "PCF019@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Mariane DL. Belen", "username"=> "PCF020", "email" => "PCF020@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Mac Quintana", "username"=> "PCF021", "email" => "PCF021@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Camilla Louis B. Gabriel", "username"=> "PCF022", "email" => "PCF022@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Rhea Melendrez", "username"=> "PCF023", "email" => "PCF023@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Grace Ciolo", "username"=> "PCF024", "email" => "PCF024@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Salome B. Lajara", "username"=> "PCF025", "email" => "PCF025@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "May A. Garcia", "username"=> "PCF026", "email" => "PCF026@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Sr. Dolores Sangel FdCC", "username"=> "PCF027", "email" => "PCF027@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Sr. Luzviminda G. Mojica FdCC", "username"=> "PCF028", "email" => "PCF028@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Sr. Gemma Umaclap FdC", "username"=> "PCF029", "email" => "PCF029@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Gio Razalan", "username"=> "PCF030", "email" => "PCF030@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));


        $user = new User(["name"=> "Ariel Monserrat", "username"=> "PCF031", "email" => "PCF031@test.com","password" => "$password"]); 
        $user->save(); 
        $user->attachRole('2'); 
        event(new Registered($user));

    }
}
