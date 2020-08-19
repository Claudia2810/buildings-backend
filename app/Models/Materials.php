<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    protected $fillable = array(
        'name',
        'unit_measure',
        'price',
        'stock',
        'total_product',
    );
}
