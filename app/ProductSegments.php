<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSegments extends Model
{
    public function productInformation()
    {
        return $this->hasOne("App\ProductInformation");
    }
}
