<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/users.json');
        $users = collect(json_decode($json));

        $users->each(function($user){
            User::create([
           
                'name' => $user->name,
                'subject' =>  $user->subject,
                'marks' => $user->marks,
           

            ]);
        });
    }
}

        
        
    
