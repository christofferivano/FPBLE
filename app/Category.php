<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['id', 'category_name', 'category_description'];

    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
