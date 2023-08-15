<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 0-100 ratings for casters
        \App\Models\Caster::all()->each(function (\App\Models\Caster $caster) {
            \App\Models\Rating::factory()->count(rand(0, 100))->create([
                'caster_id' => $caster->id,
            ]);
        });
    }
}
