<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concert>
 */
class ConcertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'Title Example',
            'date' => Carbon::parse('+2 weeks')
        ];
    }

    /**
     * Published concert
     *
     * @return Factory
     */
    public function published()
    {
        return $this->state(function (array $attributes) {
            return [
                'published_at' => Carbon::parse('-1 week')
            ];
        });
    }
}
