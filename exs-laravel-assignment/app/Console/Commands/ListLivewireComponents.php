<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
class ListLivewireComponents extends Command
{
    protected $signature = 'livewire:list';
    protected $description = 'List all Livewire components in the project';
    public function handle()
    {
        $livewirePath = app_path('Http/Livewire');
        if (!File::exists($livewirePath)) {
            $this->error('No Livewire components found.');
            return;
        }
        $components = collect(File::allFiles($livewirePath))
            ->map(fn($file) => 'App\\Http\\Livewire\\' . $file->getFilenameWithoutExtension());
        if ($components->isEmpty()) {
            $this->info('No Livewire components found.');
        } else {
            $this->info("Livewire Components:");
            foreach ($components as $component) {
                $this->line("- $component");
            }
        }
    }
}
