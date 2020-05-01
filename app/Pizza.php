<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //
    protected $fillable =['pizzatype','size','price','img','deliveryfee','pizzadesc'];
}
