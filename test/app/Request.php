<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * This's the Request's Client
     */
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * This's the Request's Product
     */

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * @return mixed
     *
     * Return Total Money with Requests
     */
    public static function totalMoney()
    {
        return Request::all()->sum(function ($request) {
            return $request->quantity * $request->product->value;
        });
    }

    /**
     * @return mixed
     *
     * Get Top Five Last Requests by ID
     */
    public static function lastRequests()
    {
        return Request::orderBy('id', 'desc')->take(5)->get();
    }

    /**
     * @return int
     *
     * Get Number of Requests Paid
     */
    public static function quantityPay()
    {
        return Request::where('pay', true)->count();
    }


}
