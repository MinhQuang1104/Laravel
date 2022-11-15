<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General_info extends Model
{
    use HasFactory;

    protected $table = 'general_info';

    protected $fillable = [
        'product_id',
        'color_id',
        'size_id',
        'quantity',
        'price'
    ];
}
