<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait GenerateUuid
{
    /**
     * Apply boot.
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (! $model->getKey()) {
                $model->{$model->uuid_field} = (string) Str::uuid();
            }
        });
    }
}
