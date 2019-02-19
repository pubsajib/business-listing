<?php
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->insert([
            [
                'name'              => 'Admin 1',
                'email'             => 'admin@gmail.com',
                'email_verified_at' => date("Y-m-d h:i:s"),
                'password'          => bcrypt('123456'),
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'Admin 2',
                'email'             => 'email@gmail.com',
                'email_verified_at' => date("Y-m-d h:i:s"),
                'password'          => bcrypt('123456'),
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'admin',
                'email'             => 'admin@atitonline.com',
                'email_verified_at' => date("Y-m-d h:i:s"),
                'password'          => bcrypt('123456'),
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'atio',
                'email'             => 'user@atitonline.com',
                'email_verified_at' => date("Y-m-d h:i:s"),
                'password'          => bcrypt('123456'),
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s")
            ],
            [
                'name'              => 'User',
                'email'             => 'user@gmail.com',
                'email_verified_at' => date("Y-m-d h:i:s"),
                'password'          => bcrypt('123456'),
                'created_at'        => date("Y-m-d h:i:s"),
                'updated_at'        => date("Y-m-d h:i:s")
            ]
        ]);
    }
}
