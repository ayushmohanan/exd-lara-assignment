<?php
namespace Database\Seeders;
use App\Models\TblTvSeriesIntervals;
use App\Models\TblTvSeries;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        TblTvSeries::factory()->count(5)->has(TblTvSeriesIntervals::factory()->count(7))->create();
       /* seeder call */
        #$this->call([
           # MasterControlSeeder::class,
        #]);
    }
}
