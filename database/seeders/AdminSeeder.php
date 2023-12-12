<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([

            'name'=>'mohammed',
            'email'=>'admin@gmail.com',
            'image'=>'1702152472.png',
            'password' =>'password',

        ]);
    }
}
