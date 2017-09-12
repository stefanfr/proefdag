<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesInformation extends Model
{
    public function SaleProducts()
    {
        $this->hasMany('App\SaleProducts');
    }
}
