<?php
namespace Database\Factories;
use App\Models\TvSeries;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TvSeries>
 */
class TblTvSeriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'     => $this->faker->city,
            'channel'   => $this->faker->company.' channel',
            'genre'    => $this->faker->randomElement(['Action', 'Comedy',  'Adventure', 'Fantasy']),
        ];
    }
}
