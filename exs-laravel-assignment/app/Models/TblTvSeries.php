<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class TblTvSeries extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'channel',
        'genre'
    ];
    public function intervals()
    {
        return $this->hasMany(TblTvSeriesIntervals::class, 'id_tv_series');
    }
}
