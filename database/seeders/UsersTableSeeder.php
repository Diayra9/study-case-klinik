<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Eka',
                'email' => '10.ekasalwa@gmail.com',
                'password' => '$2y$12$MKZy0.WC5dVg4Os7Fdl14uzvzy16IZKNWYUfQjop.HKVee9mu4Ayu',
                'created_at' => '2024-07-17 04:26:55',
                'updated_at' => '2024-07-17 04:26:55',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Dian',
                'email' => 'dianayurahmawati006@gmail.com',
                'password' => '$2y$12$OcP7M9wj4/TdYXy0n4mKwOB.6l9/G411PbpqjvgXaH7XwyRzCwDfa',
                'created_at' => '2024-07-17 04:27:52',
                'updated_at' => '2024-07-17 04:27:52',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Salma',
                'email' => 'fiebutter24@gmail.com',
                'password' => '$2y$12$O4AP9nAGbG2UqF.F.3TEb.1YAFLTRHoaBdTn6RYzwc.bFWbYPoSne',
                'created_at' => '2024-07-17 04:29:04',
                'updated_at' => '2024-07-17 04:29:04',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Gadis',
                'email' => 'gadisrachma905@gmail.com',
                'password' => '$2y$12$dJaHybo0ujgePZQxdMl6e.HEliC28bBTQhjPsljaYpzDzXPKta.1K',
                'created_at' => '2024-07-17 04:29:40',
                'updated_at' => '2024-07-17 04:29:40',
            ),
        ));
        
        
    }
}