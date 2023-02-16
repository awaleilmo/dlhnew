<?php

use Illuminate\Database\Seeder;

class NotifUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('notif_users')->insert([
       'user_id' => '1',
       'amdal' => '1',
       'uklupl' => '1',
       'sppl' => '1',
       'foto' => '1',
       'video' => '1',
       'pengaduan' => '1',
       'banksampah' => '1',
       'data' => '1',
       'warta' => '1',
       'pengumuman' => '1',
       'created_at' => '2023-02-16 16:28:50',
       'updated_at' => '2023-02-16 16:28:50',
     ]);
    }
}
