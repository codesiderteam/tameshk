<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => 1, 'title' => 'superadmin'],
            ['id' => 2, 'title' => 'admin'],
            ['id' => 3, 'title' => 'retailer'],
            ['id' => 4, 'title' => 'user']
        ]);
    }
}
