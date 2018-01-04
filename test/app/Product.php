<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * All Product's Requests
     */
    public function requests()
    {
        return $this->hasMany('App\Request');
    }
}
