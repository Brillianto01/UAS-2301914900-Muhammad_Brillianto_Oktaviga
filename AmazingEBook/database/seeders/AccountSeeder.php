<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account')->insert([
            [
                'role_id' => '1',
                'gender_id' => '2',
                'first_name' => 'Muhammad',
                'middle_name' => 'Brillianto',
                'last_name' => 'Oktaviga',
                'email' => 'muhammad.oktaviga@binus.ac.id',
                'password' => bcrypt('admin123123'),
                'display_picture_link' => 'https://i.pinimg.com/474x/65/25/a0/6525a08f1df98a2e3a545fe2ace4be47.jpg',
                'delete_flag' => 0,
            ]
        ]);
    }
}
