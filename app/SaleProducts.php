<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleProducts extends Model
{
    public function productInformation()
    {
        return $this->hasOne("App\ProductInformation");
    }
}
