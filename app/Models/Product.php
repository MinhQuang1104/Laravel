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
        'size_guide',
        'additional_info',
        'status',
        'category_id'
    ];

    public function discountType()
    {
        return $this->belongsTo(Discount_type::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function wishList() 
    {
        return $this->hasMany(Wish_list::class, 'product_id', 'id');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'product_tag');
    }

    public function product_tags()
    {
        return $this->hasMany(Product_tag::class, 'product_id', 'id');
    }

    public function color()
    {
        return $this->belongsToMany(Color::class, 'general_info', 'product_id', 'color_id');
    }

    public function size()
    {
        return $this->belongsToMany(Size::class, 'general_info', 'product_id', 'size_id');
    }

    public function general_info()
    {
        return $this->hasMany(General_info::class, 'product_id', 'id');
    }

    public function image()
    {
        return $this->hasMany(Image::class, 'product_id', 'id');
    }
}
