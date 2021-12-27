<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'type'=>'admin',
            'username'=>'admin',
            'fullname'=>'admin',
            'password'=>bcrypt('admin'),
            'phone'=>'01234567890',

        ]);

    }
}
