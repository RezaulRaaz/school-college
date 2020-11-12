<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'demo Admin',
            'role_id'=>1,
            'phone'=>'0123456879',
            'email'=>'demoadmin@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'name'=>'demo Institute',
            'role_id'=>2,
            'phone'=>'0123456879',
            'email'=>'demoinstitute@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'name'=>'demo Student',
            'role_id'=>3,
            'phone'=>'0123456879',
            'email'=>'demostudent@gmail.com',
            'password'=>Hash::make('12345678'),
        ]);
    }
}
