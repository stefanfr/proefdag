<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInformation extends Model
{
    public function ProductNutritionalValue()
    {
        return $this->hasOne("App\ProductNutritionalValue");
    }
}
