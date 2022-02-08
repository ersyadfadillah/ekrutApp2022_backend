<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'no_telp' => '0812345678',
            'jabatan' => 'Programmer',
            'nik' => '7070812345678',
            'alamat' => 'Makassar',
            'password' => Hash::make('password'),
        ]);
    }
}
