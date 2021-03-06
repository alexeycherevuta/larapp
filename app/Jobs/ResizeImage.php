<?php
namespace App\Jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Intervention\Image\ImageManager;
class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $file;
    private $formats;
    public function __construct(string $file, array $formats)
    {
        $this->file = $file;
        $this->formats = $formats;
    }
    public function handle()
    {
        $manager = new ImageManager(['driver' => 'gd']);
        foreach ($this->formats as $format){
            $image = $manager->make($this->file)
                ->fit($format, $format)
                ->save(public_path('uploads') ."/" . pathinfo($this->file, PATHINFO_FILENAME) . "_{$format}x{$format}.jpg");
        }
    }
}
