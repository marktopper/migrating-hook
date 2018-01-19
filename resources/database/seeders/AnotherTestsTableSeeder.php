<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnotherTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('another_tests')->insert([
          ['name' => 'foo'],
          ['name' => 'bar'],
          ['name' => 'baz'],
        ]);
    }
}
