<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\GenerateUuid;

class Product extends Model
{
    use SoftDeletes;
    use GenerateUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'content',
        'price',
        'sale_price',
        'share_price',
        'status',
        'post_by',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
    /**
     * The attribute to be used for storing the uuids.
     *
     * @var string
     */
    public $uuid_field = 'product_ref';
    
    /**
     * Get all of the tags for the product.
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    
    /**
     * Get all of the images for the product.
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
