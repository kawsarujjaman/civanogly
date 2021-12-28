<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\page;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $page = new page();
        $page->name= 'Contact Us';
        $page->slug= 'contact-us';
        $page->content= 'Lorem';
        $page->save();

        $page = new page();
        $page->name= 'About Us';
        $page->slug= 'about-us';
        $page->content= 'Lorem';
        $page->save();

        $user= new User();
        $user->name= 'Kawsarujjaman' ;
        $user->email= 'contact@kawsarujjaman.com' ;
        $user->email_verified_at = now();
        $user->password= Hash::make('contact@kawsarujjaman.com') ;
        $user->Remember_token= str::random(10);
        $user->save();


         \App\Models\location::factory(10)->create();
         \App\Models\property::factory(50)->create();
         \App\Models\media::factory(500)->create();

    }
}
