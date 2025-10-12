<?php

// app/Http/Livewire/Front/FavoritesCounter.php
namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Services\FavoriteService;

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
}
