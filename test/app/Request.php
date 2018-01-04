<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{

    /**
     * Get the Real Request's Value
     *
     * @return double
     */
    public function getValueAttribute()
    {
        return $this->quantity * $this->product->value;
    }

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
     * Get All Clients Distinct
     *
     * return int
     */
    private static function distClients()
    {
        return \DB::table('requests')->where('pay', true)->distinct('client_id')->count('client_id');
    }


    /**
     * @return double
     *
     * Return Total Money with Requests paid
     */
    public static function totalMoney()
    {
        return Request::where('pay', true)->get()->sum(function ($request) {
            return $request->value;
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
     * Get Number of Requests Paid with Card
     */
    public static function quantityPayCard()
    {
        return Request::where('pay', true)->where('type', true)->count();
    }

    /**
     * @return int
     *
     * Get Number of Requests Paid with Boleto
     */
    public static function quantityPayBoleto()
    {
        return Request::where('pay', true)->where('type', false)->count();
    }

    /**
     * Get Ticket Value
     *
     * return double
     */
    public static function ticketValue()
    {
        return ( self::quantityPayBoleto() + self::quantityPayCard() ) / self::distClients();
    }

}
