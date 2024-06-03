<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username'=>'Jamal',
                'email'=>'Jamal@gmail.com',
                'nomor_telpon'=>'08226969',
                'tanggal_lahir'=>'2003-07-20',
                'role'=>'buyer',
                'password'=>'123',
            ],
            [
                'username'=>'udin',
                'email'=>'udin@gmail.com',
                'nomor_telpon'=>'08226966',
                'tanggal_lahir'=>'2003-07-21',
                'role'=>'seller',
                'password'=>'123',
            ],
            [
                'username'=>'rudi',
                'email'=>'rudi@gmail.com',
                'nomor_telpon'=>'08226967',
                'tanggal_lahir'=>'2003-07-22',
                'role'=>'admin',
                'password'=>'123',
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
