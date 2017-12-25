<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function products()
    {
        return $this->hasMany('App\Product', 'category_id', 'id');
    }
    public function images()
    {
        return $this->hasManyThrough('App\Product', 'App\Image', 'category_id', 'product_id', 'id');
    }
}
