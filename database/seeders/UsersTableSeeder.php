<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        //kosongkan semua data di tabel users
        // \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // \DB::table('users')->truncate();

        //membuat 3 user secara manual
        \DB::table('users')->insert([
            [
                'NamaDepan' => "Budi",
                'email' => "budi_gunawan@yahoo.co.id",
                'password' =>bcrypt('rahasia')
            ],
            [
                'NamaDepan' => "Iwan",
                'email' => "ar_iwan@yahoo.co.id",
                'password' =>bcrypt('sandi') 
            ],
            [
                'NamaDepan' => "Tuti",
                'email' => "tuti@live.com",
                'password' =>bcrypt('rahasia')
            ]
            ]);
    }
}