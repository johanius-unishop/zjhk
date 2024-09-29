<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Storage;

class AttachFilesToProduct implements ShouldQueue
{
    use Queueable;
    protected $product;
    protected $collection;
    protected $file;
    protected $model;
    /**
     * Create a new job instance.
     */
    public function __construct(
        Product $product,
        $collection,
        $file
    ) {
        $this->product    = $product;
        $this->collection = $collection;
        $this->file       = $file;

    }

    /**
     * Execute the job.`     ->preservingOriginal()
     */
    public function handle(): void
    {
        // $this->product->addMedia(public_path('products'. DIRECTORY_SEPARATOR .'pdf'. DIRECTORY_SEPARATOR    . $this->file))

        $this->product->addMedia(public_path('products/pdf/' . $this->file))
            ->toMediaCollection($this->collection);
    }
}
