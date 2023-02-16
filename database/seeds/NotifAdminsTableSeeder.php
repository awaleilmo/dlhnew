<?php

use Illuminate\Database\Seeder;

class NotifAdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('notif_admins')->insert([
                            'dokling' => '1',
                            'data' => '1',
                            'pelaporan' => '1',
                            'banksampah' => '1',
                            'created_at' => '2023-02-16 16:28:50',
                            'updated_at' => '2023-02-16 16:28:50',
                      ]);
    }
}
