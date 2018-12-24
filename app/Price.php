<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = [];

    /**
     * The roles that belong to the user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * The roles that belong to the user.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * The roles that belong to the user.
     */
    public function variant()
    {
        return $this->belongsTo('App\ProductVariant');
    }

    /**
     * The roles that belong to the user.
     */
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
