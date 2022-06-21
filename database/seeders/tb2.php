<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class tb2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb2')->insert([
            'name'=>Str::random('10'),
            'email'=>Str::random('10').'@gmail.com',
            'description'=>Str::random('50')
        ]
        );
    }
}
