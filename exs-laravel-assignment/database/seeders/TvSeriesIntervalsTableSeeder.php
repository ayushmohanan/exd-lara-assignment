<?php
namespace Database\Seeders;
use App\Models\TblTvSeriesIntervals;
use App\Models\TblTvSeries;
use Illuminate\Database\Seeder;
class TvSeriesIntervalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TblTvSeriesIntervals::factory()->create();
    }
}
