<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class AddToFavoritesButton extends Component
{
    public $isInFavorites = false;
    public $productId;

    public function mount($productId)
    {
        $this->productId = $productId;
        $this->checkIfInFavorites();
    }

    private function checkIfInFavorites()
    {
        if (!Auth::check()) {
            $sessionFaves = session()->get('guest_favorites', []);
            $this->isInFavorites = in_array($this->productId, $sessionFaves);
        } else {
            $this->isInFavorites = Favorite::where('user_id', Auth::id())
                ->where('product_id', $this->productId)->exists();
        }
    }

    public function toggleFavorite()
    {
        if (!$this->isInFavorites) {
            if (Auth::check()) {
                Favorite::create([
                    'user_id' => Auth::id(),
                    'product_id' => $this->productId
                ]);
            } else {
                session()->push('guest_favorites', $this->productId);
            }
        } else {
            if (Auth::check()) {
                Favorite::where('user_id', Auth::id())
                    ->where('product_id', $this->productId)->delete();
            } else {
                session()->pull('guest_favorites.' . array_search($this->productId, session()->get('guest_favorites')));
            }
        }

        $this->isInFavorites = !$this->isInFavorites;
    }

    public function render()
    {
        return view('livewire.front.add-to-favorites-button');
    }
}
