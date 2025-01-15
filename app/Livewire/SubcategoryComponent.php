<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SubcategoryComponent extends Component
{

    use LivewireAlert;
    public string $parent_category;
    public $parent_category_id;
    public $description;
    public $title;
    public $keywords;
    public $description_seo;
    public $canonical_url;
    
    public $name = '';
    public bool $published = false;
       
    public function mount($parent_category = null)
    {
        $this->parent_category_id = $parent_category;
    }

    public function save()
    {   
        // Проверка прав доступа
        if (!Gate::allows('manage content')) {
            return abort(401);
        }
        
        $this->parent_category_id = $this->parent_category;
        $published = $this->published ? 1 : 0;
    
        $this->validate();
    
        $record = Category::create([
            'name'              => $this->name,
            'published'         => $published,
            'parent_id'=> $this->parent_category_id
        ]);
        $seoRecord = $record->seo()->firstOrNew(['model_id' => $record->id]);

        if (!$seoRecord->exists) {
            $seoRecord->fill([
                'title' => $this->title,
                'description' => $this->description_seo,
                'keywords' => $this->keywords,
                'canonical_url' => $this->canonical_url
            ])->save();
        }

        // Очистка кеша
        Cache::forget('CategoriesAsTree');

        $this->reset('name','published');
        $this->dispatch('update-subcategory-table');
        return;
    }

    

    protected $rules = [
        'name' => 'required|min:3',
        'title' => 'nullable|string|max:255',
        'keywords' => 'nullable|string|max:255',
        'description_seo' => 'nullable|string|max:500',
        'canonical_url' => 'nullable|url|max:255',
    ];

    protected function messages()
    {
        return [
            'name.required'     => 'Название категории должно быть заполнено',
            'name.min'     => 'Название категории должно содержать минимум 3 символа',
        ];
    } 



    public function render()
    {
        return view('livewire.subcategory-component');
    }
}