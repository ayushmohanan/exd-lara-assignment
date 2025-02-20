<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class TblTvSeriesIntervals extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tv_series',
        'week_day',
        'show_time'
    ];
    public function tvSeries()
    {
        return $this->belongsTo(TblTvSeries::class, 'id_tv_series');
    }
}
