<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kepala',
            'email' => 'kepala@gmail.com',
            'password' => Hash::make('kepala12'),
            'bawahan_dari' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'bidang1',
            'email' => 'bidang1@gmail.com',
            'password' => Hash::make('bidang11'),
            'bawahan_dari' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'bidang2',
            'email' => 'bidang2@gmail.com',
            'password' => Hash::make('bidang22'),
            'bawahan_dari' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'staff1bidang1',
            'email' => 'staff1bidang1@gmail.com',
            'password' => Hash::make('staff1bidang1'),
            'bawahan_dari' => '2'
        ]);

        DB::table('users')->insert([
            'name' => 'staff2bidang1',
            'email' => 'staff2bidang1@gmail.com',
            'password' => Hash::make('staff2bidang1'),
            'bawahan_dari' => '2'
        ]);

        DB::table('users')->insert([
            'name' => 'staff1bidang2',
            'email' => 'staff1bidang2@gmail.com',
            'password' => Hash::make('staff1bidang2'),
            'bawahan_dari' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'staff2bidang2',
            'email' => 'staff2bidang2@gmail.com',
            'password' => Hash::make('staff2bidang2'),
            'bawahan_dari' => '3'
        ]);
        
    }
}
