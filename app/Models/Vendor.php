<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Vendor extends Model
{
    use HasFactory;
    use HasSlug;
    /**
     * Get the options for generating the slug.
     */

    protected $guarded = [];
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(120)
            ->usingSeparator('-')
            ->usingLanguage('ru');
    }
    public function product()
    {
        return $this->hasMany(Product::class, 'vendor_id', 'id');
    }
    public function getCanDeletedAttribute()
    {
        if ($this->product_count   > 0) {
            return false;
        }
        return true;
    }

}
