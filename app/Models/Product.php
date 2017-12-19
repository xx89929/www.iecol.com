<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "de1_product";

    protected $dateFormat = "U";

    public function pclass(){
        return $this->hasOne('App\Models\Pclassify','id','product_classify');
    }

}
