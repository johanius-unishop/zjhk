<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maize\Searchable\HasSearch;
use Illuminate\Support\Facades\DB;
class PropertyValue extends Model
{
    use HasSearch;
    public $timestamps = false;
    protected $fillable = [
        'value',
    ];
 /**
     * Get the model's searchable attributes.
     *
     * @return array
     */
    public function getSearchableAttributes(): array
    {
        return [
            'value' => 5, // Model attribute
            // 'body.en' => 2, // Single json key of a model attribute
            // 'tags.name', // Relationship attribute
            // 'tags.description.*', // All json keys of a relationship attribute
            // DB::raw("CONCAT(creator_name, ' ', creator_surname)"), // Raw expressions are supported too
        ];
    }

}
