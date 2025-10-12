<?php

// app/Http/Livewire/Front/FavoritesCounter.php
namespace App\Livewire\Front;

use Livewire\Component;
use App\Services\FavoriteService;
use Livewire\Attributes\On;

class FavoritesCounter extends Component
{
    public int $favoriteCount = 0;

    public function mount(FavoriteService $service)
    {
        $this->updateFavoriteCount($service);
    }

    public function updateFavoriteCount(FavoriteService $service)
    {
        $this->favoriteCount = $service->getFavoriteCount();
    }

    public function render()
    {
        return view('livewire.front.favorites-counter');
    }

    #[On('post-created')]
    public function updated(FavoriteService $service)
    {
        $this->updateFavoriteCount($service);
    }
}
