<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'username' => 'Admin',
                'email' => 'admin@xeta.io',
                'password' => bcrypt('admin'),
                'slug' => 'admin',
                'article_count' => 1,
                'register_ip' => '127.0.0.1',
                'last_login_ip' => '127.0.0.1',
                'last_login' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'Editor',
                'email' => 'editor@xeta.io',
                'password' => bcrypt('editor'),
                'slug' => 'editor',
                'article_count' => 0,
                'register_ip' => '127.0.0.1',
                'last_login_ip' => '127.0.0.1',
                'last_login' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'Member',
                'email' => 'member@xeta.io',
                'password' => bcrypt('member'),
                'slug' => 'member',
                'article_count' => 0,
                'register_ip' => '127.0.0.1',
                'last_login_ip' => '127.0.0.1',
                'last_login' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'username' => 'Banished',
                'email' => 'banished@xeta.io',
                'password' => bcrypt('banished'),
                'slug' => 'banished',
                'article_count' => 0,
                'register_ip' => '127.0.0.1',
                'last_login_ip' => '127.0.0.1',
                'last_login' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}