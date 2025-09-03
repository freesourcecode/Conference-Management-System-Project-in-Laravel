<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'is_admin' => '1',
            'first_name' => 'MD.Admin',
            'last_name' => 'admin',
            'email' => 'admin@cms.com',
            'password' => bcrypt('iloveyou'),
            'remember_token' => str_random(10),
            'created_at' => new DATETIME(),
            'updated_at' => new DATETIME(),


        ]);
    }
}
