<?php

namespace App\Livewire;

use Livewire\Component;

class Seo extends Component
{
    public $isDisabled = false;
    public $seo = '';
    public $record = '';
    public $keywords = '';
    public $title = '';
    public $description = '';

    public $robots = '';
    public $canonical_url = '';
    public function mount($record = null)
    {

        $this->record = $record;
        $this->seo = @$this->record->seo;
        $this->title         = @$this->seo->title;
        $this->keywords      = @$this->seo->keywords;
        $this->description   = @$this->seo->description;
        $this->robots        = @$this->seo->robots;
        $this->canonical_url = @$this->seo->canonical_url;

    }

    public function save()
    {
        try {
            $this->record->seo->update([
                'title' => $this->title,
                'keywords' => $this->keywords,
                'description' => $this->description,
                // 'robots' => 'index, follow',
                'canonical_url' => $this->canonical_url,
            ]);
            $this->dispatch('toast', message: 'SEO обновлено.' , notify: 'success');
            //   dd($this->record ,$this->record->seo , $this->title, $this->keywords, $this->description, $this->canonical_url);
        }
        catch (\Throwable $th) {
            //throw $th;
            $this->dispatch('toast', message: 'Ошибка! SEO не обновлено.'  . $th->getMessage(),  notify: 'error');
        }

          $this->updateSeo($this->record);
    }


    public function updateSeo( $record)
    {


        $this->seo           = $record->seo;
        //  dd($this->record ,$this->seo);
        $this->title         = $this->seo->title;
        $this->keywords      = $this->seo->keywords;
        $this->description   = $this->seo->description;
        $this->robots        = $this->seo->robots;
        $this->canonical_url = $this->seo->canonical_url;
    }
    public function render()
    {

        if (is_null($this->record)) {
            $this->isDisabled = true;
        }
        return view('livewire.seo');
    }
}
