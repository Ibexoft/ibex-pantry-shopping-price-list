<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    /**
     * The roles that belong to the user.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    /**
     * The roles that belong to the user.
     */
    public function variants()
    {
        return $this->hasMany('App\ProductVariant');
    }

    /**
     * The roles that belong to the user.
     */
    public function prices()
    {
        return $this->hasMany('App\Price');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
