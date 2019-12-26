<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'path',
        'order',
    ];
    
    /**
     * Get the product of the image.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getPathAttribute($value)
    {
        return asset('/product-images/' . $value);
    }
}