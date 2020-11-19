<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  [
            [
                'name' => 'автор не задан',
                'email' => 'authorUnknown@example.com',
                'password' => bcrypt(Str::random(12))
            ],
            [
                'name' => 'автор 1',
                'email' => 'author@example.com',
                'password' => bcrypt('123456')
            ]
        ];

        DB::table('users')->insert($data);
    }
}
