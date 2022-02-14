<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->user();
    }

    public function user(){
        $SuperAdmin = new User();
        $SuperAdmin->name = 'Superadmin';
        $SuperAdmin->email = 'superadmin@gmail.com';
        $SuperAdmin->password = \Hash::make('password');
        $SuperAdmin->save();
    }
}
