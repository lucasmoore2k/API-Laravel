<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Employee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('employees')->insert([
    		'name' => "Jhon smith",
    		'position' => "soldier",
    		'email' => 'lala@gmail.com',
    		'phone' => '+177777777',
    		'admission' => '05-11-2005',
    		'company_id' => 1
    	]);
    	DB::table('employees')->insert([
    		'name' => "Naruto Uzumuaki",
    		'position' => "Ninja",
    		'email' => 'aldeiea@gmail.com',
    		'phone' => '+17774747',
    		'admission' => '05-11-2002',
    		'company_id' => 2
    	]);

    	DB::table('employees')->insert([
    		'name' => "Quasimoda Oliveira",
    		'position' => "Oficial",
    		'email' => 'ljaaaa@gmail.com',
    		'phone' => '+1777777777',
    		'admission' => '01-02-2000',
    		'company_id' => 3
    	]);

    		DB::table('employees')->insert([
    		'name' => "Suzan",
    		'position' => "Camareira",
    		'email' => 'lsls@gmail.com',
    		'phone' => '+17755777777',
    		'admission' => '05-11-2000',
    		'company_id' => 4
    	]);




    }
}
