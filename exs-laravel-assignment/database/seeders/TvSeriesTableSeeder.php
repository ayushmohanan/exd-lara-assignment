<?php
namespace Database\Seeders;
use App\Models\TblTvSeries;
use Illuminate\Database\Seeder;
class TvSeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TblTvSeries::factory()->count(50)->create();
    }
}
