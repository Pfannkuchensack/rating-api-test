<?php

namespace Tests\Feature;

use App\Models\Caster;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RatingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGetByRating(): void
    {
        $response = $this->get(route('ratings', ['rating' => 1]));

        // prüfen ob nur ratings mit 1 vorhanden sind
        $response->assertJson([
            'data' => [
                [
                    'rating' => 1,
                ],
            ],
        ]);
    }

    public function testGetByCaster(): void
    {
        $response = $this->get(route('ratings', ['caster' => Caster::first()->name]));

        $response->assertJson([
            'data' => [
                [
                    'caster' => [
                        'name' => Caster::first()->name,
                    ]
                ],
            ],
        ]);
    }

    public function testGetByRatingAndCaster(): void
    {
        $response = $this->get(route('ratings', ['caster' => Caster::first()->name, 'rating' => 1]));

        $response->assertJson([
            'data' => [
                [
                    'rating' => 1,
                    'caster' => [
                        'name' => Caster::first()->name,
                    ]
                ],
            ],
        ]);
    }
}
