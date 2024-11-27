<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Assessor;
use App\Models\CompentencyStandard;
use App\Models\Major;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'salmanuraeni',
            'username'=>'salma',
            'email'=>'admin@gmail.com',
            'role' => 'admin',
            'phone_number' => '097978',
            'password'=>bcrypt('1111'),
            'is_active' => 1,
        ]);

        User::create([
            'name'=>'kaylanafisa',
            'username' => 'kayla',
            'email'=>'assessor@gmail.com',
            'role' => 'assessor',
            'phone_number' => '0897574352',
            'password'=>bcrypt('2222'),
            'is_active' => 1,
        ]);
        User::create([
            'name'=>'adenurma',
            'username' => 'ade',
            'email'=>'student@gmail.com',
            'role' => 'student',
            'phone_number' => '0897562252',
            'password'=>bcrypt('3333'),
            'is_active' => 1,
        ]);
        $user = User::create([
            'name'=>'nabila',
            'username' => 'nabila',
            'email'=>'nabila@gmail.com',
            'role' => 'assessor',
            'phone_number' => '0897562252',
            'password'=>bcrypt('3333'),
            'is_active' => 1,
        ]);

        Assessor::create([
            'assessor_type' => 'internal',
            'description' => 'mengelola database',
            'user_id' => $user->id,
        ]);
        Assessor::create([
            'assessor_type' => 'external',
            'description' => 'mengelola database',
            'user_id' => $user->id,
        ]);


        Major::create([
            'major_name' => 'RPL',
            'description' => 'Rekayasa Perangkat Lunak',
        ]);


        // CompentencyStandard::create([
        //     'code' => '12345',
        //     'title' => 'Menganalisi System',
        //     'description'=> 'lalalalalalalalalalalla',
        //     'major' => 'rekayasa perangkat lunak',
        //     'assessor' => ''
        // ]);



    }
}
