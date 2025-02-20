<div>
    <div>
        <label for="date">Date:</label>
        <input type="text" id="date" placeholder="Select Date and Time">
        <input type="hidden" id="datetime" placeholder="Selected Date and Time" readonly>
        <button wire:click="getSchedule">Search</button>
    </div>
    <hr>
    @if(isset($upcomingShows))
        <div id="results">
            @if (!empty($upcomingShows))
                <h2>Next TV Seriess</h2>
                @if(count($showTItles) > 1)
                    <select id="filter" name="filter" wire:model="filter" wire:change="getSchedule">
                        <option value="">:: All TV-Series</option>
                        @foreach($showTItles as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                @endif
                <div class="card">
                    <table class="table table-striped" id="tableShows">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Series Name</th>
                                <th>Channel</th>
                                <th>Day</th>
                                <th>Show Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($upcomingShows as $shows)
                                <tr class="bg-light">
                                    <td>{{ $shows->title }}</td>
                                    <td>{{ $shows->channel }}</td>
                                    <td>{{ $shows->week_day }}</td>
                                    <td>{{ $shows->show_time }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert">
                    <p>No Shows Scheduled , Please try selecting another day</p>
                </div>
            @endif
        </div>
    @endif
    <script type="module">
        flatpickr("#date", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            minDate: "today",
            time_24hr: true,
            onChange: function(selectedDates, dateStr, instance) {
                var selectedDate = dateStr.split(' ')[0];
                var selectedTime = dateStr.split(' ')[1];
                document.getElementById('datetime').value = selectedDate + " " + selectedTime;
                @this.set('datetime', selectedDate + " " + selectedTime);
                Livewire.emit('get-schedule');
            }
        });
    </script>
</div>
