<?php

use Illuminate\Database\Seeder;

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
                    'name' => 'awaludin ramdani',
                    'email' => 'awal.eilmo@gmail.com',
                    'password' => Hash::make('awal1234'),
                    'email_verified_at' => '2023-02-16 16:28:50',
                    'level' => 'admin',
                    'nohp' => '085157712096',
                    'created_at' => '2023-02-16 16:28:50',
                    'updated_at' => '2023-02-16 16:28:50'
              ]);
    }
}
