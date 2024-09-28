<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Queue;

class AdminQueue extends Component
{

    public $queue_name = 'default';
    public $size = 0;
    public function mount()
    {
        $this->size = Queue::size($this->queue_name);
    }
    public function render()
    {
        return view('livewire.admin-queue');
    }

    public function refreshSubscribers()
    {
        $this->size = Queue::size($this->queue_name);
    }
}
