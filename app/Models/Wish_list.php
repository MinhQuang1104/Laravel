<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish_list extends Model
{
    use HasFactory;
    
    protected $table = 'wish_list';

    protected $fillable = [
        'product_id',
        'status'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
