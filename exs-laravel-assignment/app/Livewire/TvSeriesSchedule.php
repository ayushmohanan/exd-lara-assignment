<?php
namespace App\Livewire;
use App\Models\TblTvSeries;
use Carbon\Carbon;
use Livewire\Component;
class TvSeriesSchedule extends Component
{
    public $datetime;
    public $filter;
    public $upcomingShows;
    public $showTItles;
    protected $listeners = ['get-schedule' => 'getSchedule'];
    public function mount()
    {
        $this->datetime = Carbon::now();
        $this->filter = null;
    }
    public function render()
    {
        return view('livewire.tv-series-schedule');
    }
    public function getSchedule()
    {
        $datetimeParsed = Carbon::parse($this->datetime);
        $weekDay  = $datetimeParsed->englishDayOfWeek;
        $showTime = $datetimeParsed->format('H:i');
        #egear loading
        $query = TblTvSeries::query()
            ->with('intervals')
            ->join('tbl_tv_series_intervals as i', 'tbl_tv_series.id', '=', 'i.id_tv_series')
            ->where('i.show_time', '>=', $showTime)
            ->where('i.week_day', '=', $weekDay);
        if ($this->filter) {
            $query->where('tbl_tv_series.id', $this->filter);
        }
        $showTItlesQuery = clone $query;
        $this->showTItles = $showTItlesQuery->groupBy('tbl_tv_series.id', 'tbl_tv_series.title')
            ->orderBy('tbl_tv_series.title')
            ->pluck('tbl_tv_series.title', 'tbl_tv_series.id');
        $schedule = $query->orderBy('i.show_time')
            ->select('i.show_time', 'i.week_day', 'tbl_tv_series.title', 'tbl_tv_series.channel')
            ->get();
        $formattedSchedule = $schedule->map(function ($item) {
            $item['show_time'] = Carbon::parse($item['show_time'])->format('H:i');
            return $item;
        });
        # Set the upcoming shows
        $this->upcomingShows = $formattedSchedule ?: null;
    }
}
