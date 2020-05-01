<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizzaorder extends Model
{
    //
    /*
    id,
    customername
    customerlocation
    customerphone
    pizzatype
    pizzasize
    price
    deliveryfee
    totalprice
    additionaldetails
    */
    protected $fillable = ['customername','customerlocation','customerphone','pizzatype','pizzasize','quantity','price','deliveryfee','totalprice','additionaldetails'];
}
