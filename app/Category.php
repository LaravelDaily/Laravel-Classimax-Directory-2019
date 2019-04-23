<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'icon',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'category_company');
    }

    public static function categories()
    {
        return static::pluck('name', 'id');
    }
}
