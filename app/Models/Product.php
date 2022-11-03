<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'Products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'sku',
        'weight',
        'dimension',
        'description',
        'price',
        'old_price',
        'discount',
        'discount_type_id',
        'hot',
        'featured',
        'status_id',
        'category_id'
    ];

    public function discountType()
    {
        return $this->belongsTo(Discount_type::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
}
