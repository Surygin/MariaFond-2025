<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'email' => 'anton@premier-partner.ru'
        ],
            [
                'name' => 'Super User',
                'password' => Hash::make('1234')
            ]
        );

        $this->call([
            MyCompanySeeder::class,
            KidSeeder::class
        ]);


    }
}
