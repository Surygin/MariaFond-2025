<?php

namespace Database\Seeders;

use App\Models\Kid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kids = Kid::factory(5)->create();

        foreach ($kids as $kid)
        {
            $kid->image()->create([
                'url' => fake()->imageUrl
            ]);
        }
    }
}
