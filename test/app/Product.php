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

    /**
     * Get the Product's Quantity Request
     *
     * @return int
     */
    public function getQuantityRequestAttribute()
    {
        $list = Request::where('product_id', $this->id)->where('pay', true)->get(['quantity']);

        return $list->sum(function ($request) {
            return $request->quantity;
        });
    }

    /**
     * Get the Product's Value Request
     *
     * @return double
     */
    public function getValueRequestAttribute()
    {
        $list = Request::where('product_id', $this->id)->where('pay', true)->get();

        return $list->sum(function ($request) {
            return $request->value;
        });
    }

    /**
     * Get the biggest Products' Values Request
     *
     * @return Collection
     */
    public static function biggerValues()
    {
        return Product::all()->sortByDesc(function ($product) { return $product->valueRequest; } )->take(5);
    }

    /**
     * Get the biggest Products' Quantity Request
     *
     * @return Collection
     */
    public static function biggerQuantities()
    {
        return Product::all()->sortByDesc(function ($product) { return $product->quantityRequest; } )->take(5);
    }
}
