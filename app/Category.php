<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    /**
     * The roles that belong to the user.
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
