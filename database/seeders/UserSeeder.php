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
                'password'=>'123',
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
