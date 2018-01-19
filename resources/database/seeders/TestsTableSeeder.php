<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
          ['name' => 'foo'],
          ['name' => 'bar'],
          ['name' => 'baz'],
        ]);
    }
}
