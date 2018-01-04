<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

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

    /**
     * Get the City's Quantity Request
     *
     * @return int
     */
    public function getQuantityAttribute()
    {
        $list = Client::where('city_id', $this->id)->pluck('id');
        return Request::whereIn('client_id', $list)->count();
    }

    /**
     * Get the City's Value Request
     *
     * @return double
     */
    public function getValueAttribute()
    {
        $list = Client::where('city_id', $this->id)->pluck('id');
        $list = Request::whereIn('client_id', $list)->where('pay', true)->get();

        return $list->sum(function ($request) {
            return $request->value;
        });
    }

    /**
     * Get the biggest Cities' Values
     *
     * @return Collection
     */
    public static function biggerValues()
    {
        return City::all()->sortByDesc(function ($city) { return $city->value; } )->take(5);
    }

    /**
     * Get the biggest Cities' Quantity
     *
     * @return Collection
     */
    public static function biggerQuantities()
    {
        return City::all()->sortByDesc(function ($city) { return $city->quantity; } )->take(5);
    }

}
