<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Field extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type',
        'price_per_hour'
    ];

    protected static function boot(){
        parent::boot();

        static::creating(function ($field) {
            $field->slug = Str::slug($field->name);
        });
    }
}
