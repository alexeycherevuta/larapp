<?php
namespace App\Jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Intervention\Image\Facades\Image;
class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $file;
    public function __construct(string $file)
    {
        $this->file = $file;
    }
    public function handle()
    {
        foreach (config('world.image.sizes') as $size) {
            $filename = pathinfo($this->file, PATHINFO_FILENAME) . "_{$size}x{$size}." . PATHINFO_EXTENSION;
            $image = Image::make($this->file)
                ->fit($size, $size)
                ->save(public_path('uploads') . '/' . $filename);
        }
    }
}
