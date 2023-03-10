<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
            [
                'name'=> 'Petugas',
                'username'=> 'petugas',
                'password'=>bcrypt('123456'),
                'level'=> 1,
                'email'=> 'petugas@gmail.com',
            ],

            [
                'name'=> 'Pasien',
                'username'=> 'pasien',
                'password'=>bcrypt('123456'),
                'level'=> 2,
                'email'=> 'pasien@gmail.com',
            ],
        ];
        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
