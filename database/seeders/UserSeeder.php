<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        //reset table user
        User::truncate();
        Schema::enableForeignKeyConstraints();
        $data = [
            [
                'nama_lengkap' => 'Super Admin',
                'email' => 'super_admin@gmail.com',
                'password' => Hash::make('admin123'),
                'hak_akses' => 'admin',
            ],
            [
                'nama_lengkap' => 'Yoga Pratama',
                'email' => 'yogapratama@gmail.com',
                'password' => Hash::make('yoga123'),
                'hak_akses' => 'kasir',
            ]
        ];

        //multiple insert ke table user
        foreach ($data as $value) {
            User::create([
                'nama_lengkap' => $value['nama_lengkap'],
                'email' => $value['email'],
                'password' => $value['password'],
                'hak_akses' => $value['hak_akses'],
            ]);
        }

        // User::create([
        //     'nama_lengkap' => 'Yaqin',
        //     'email' =>'admin1@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'hak_akses' => 'admin',
        // ]);
        // input data ke table user
        // DB::table('users')->insert([
        //     'nama_lengkap' => 'Muhammad Yaqin',
        //     'email' =>'myaqin@gmail.com',
        //     'password' => Hash::make('myadmin'),
        //     'hak_akses' => 'admin',
        //     //'create_at' => carbon::now(),
        //     //'update_at' => carbon::now(),

        // ]);
    }
}
