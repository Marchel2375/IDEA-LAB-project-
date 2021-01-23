<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('users')->insert([
            ['name' => 'Andrean Sugimoto', 'email' => 'grampssugimoto@gmail.com', 'password' => Hash::make('wongsugih'), 'address' => 'Jln Pegangsaan Timur, Jakarta', 'gender' => 'Male', 'birthday' => Carbon::create('1999','11','05'), 'admin' => '1'],
            ['name' => 'Stephanie MacFarloan', 'email' => 'stepfarloan@gmail.com', 'password' => Hash::make('thefamstep'), 'address' => 'Jln Letjen Suprapto, Bekasi', 'gender' => 'Female', 'birthday' => Carbon::create('1982','06','12'), 'admin' => '0']
            ]);
    }
}
