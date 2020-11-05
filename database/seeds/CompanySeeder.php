<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => "Cocacola",
            'cnpj' => Str::random(10),
            'address' => "Rua XX - Belo Horizonte / MG"
        ]);
        DB::table('companies')->insert([
            'name' => "Apple",
            'cnpj' => Str::random(10),
            'address' => "Rua XXXXX, XXXX - XXXXXX - Salvador / ba"
        ]);
        DB::table('companies')->insert([
            'name' => "Nasa",
            'cnpj' => Str::random(10),
            'address' => "Rua XXXXX, - Houston / MG"
        ]);
        DB::table('companies')->insert([
            'name' => "House ltda",
            'cnpj' => Str::random(10),
            'address' => "Rua XyyyyXXX - Belo Horizonte / RJ"
        ]);
    }
}
