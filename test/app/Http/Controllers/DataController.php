<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as myRequest;
use App\Product;
use App\City;

class DataController extends Controller
{
    /**
     * Return All Data for Overview
     */
    public static function topData()
    {
        $data['receita'] = myRequest::totalMoney();
        $data['ticket'] = myRequest::ticketValue();
        $data['paysCard'] = myRequest::quantityPayCard();
        $data['paysBoleto'] = myRequest::quantityPayBoleto();

        return $data;
    }

    /**
     * Return Top Five for Table Last Requests
     */
    public static function lastTable()
    {
        return myRequest::lastRequests();
    }

    /**
     * Return Top Five for Table Money Products
     */
    public static function moneyPopularTable()
    {
        return Product::biggerValues();
    }

    /**
     * Return Top Five for Table Quantity Products
     */
    public static function quantityPopularTable()
    {
        return Product::biggerQuantities();
    }

    /**
     * Return Top Five for Table Money Cities
     */
    public static function moneyCitiesTable()
    {
        return City::biggerValues();
    }

    /**
     * Return Top Five for Table Quantity Cities
     */
    public static function quantityCitiesTable()
    {
        return City::biggerQuantities();
    }
}
