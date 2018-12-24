<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $guarded = [];

    /**
     * The roles that belong to the user.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
