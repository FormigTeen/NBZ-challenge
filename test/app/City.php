<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * All Clients' City
     */
    public function clients()
    {
        return $this->hasMany('App\Client');
    }
}
