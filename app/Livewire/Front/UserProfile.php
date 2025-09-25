<?php

namespace App\Livewire\Front;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;

class UserProfile extends Component
{
    use WithPagination;

    public $user;
    public string $activePanel = 'profile'; // По умолчанию активная панель - профиль


   // public function mount($user)
   // {
     //   $this->user = $user;
    //}

    public function render()
    {
        return view('livewire.front.user-profile');//, compact('user'));
    }

    public function selectPanel(string $panel)
    {
        $this->activePanel = $panel;
    }
}
