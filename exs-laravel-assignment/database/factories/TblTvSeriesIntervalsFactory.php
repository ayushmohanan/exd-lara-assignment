<?php
namespace Database\Factories;
use App\Models\TblTvSeries;
use App\Models\TblTvSeriesIntervals;
use Illuminate\Database\Eloquent\Factories\Factory;
class TblTvSeriesIntervalsFactory extends Factory
{
    protected $model = TblTvSeriesIntervals::class;
    public function definition(): array
    {
        return [
            'id_tv_series' => TblTvSeries::factory(),
            'week_day' => $this->faker->dayOfWeek,
            'show_time' => $this->faker->time('H:i:s'),
        ];
    }
}
