<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInformation extends Model
{
    public function ProductNutritionalValue()
    {
        return $this->hasOne("App\ProductNutritionalValue");
    }

    public function ProductSegmentsValue()
    {
        return $this->hasMany("App\ProductSegments");
    }

    public function SaleProducts()
    {
        return $this->hasMany("App\SaleProducts");
    }

    public function PurchaseInformation()
    {
        return $this->hasMany("App\PurchaseInformation");
    }
}
