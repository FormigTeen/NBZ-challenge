<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * All Client's Requests
     */
    public function requests()
    {
        return $this->hasMany('App\Request');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * This's Client's City
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

}
