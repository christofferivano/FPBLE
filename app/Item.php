<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = ['id', 'item_name', 'item_description', 'item_quantity', 'category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
