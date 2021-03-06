<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_ref',
        'name',
        'slug',
        'content',
        'price',
        'share_price',
        'status'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    /**
     * Get all of the tags for the product.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    /**
     * Set post by.
     *
     * @param  string  $value
     * @return void
     */
    public function setPostByAttribute($value)
    {
        $this->attributes['post_by'] = auth()->user()->id;
    }
}
