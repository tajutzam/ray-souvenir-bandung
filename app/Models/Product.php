<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //

    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'image',
        'other_image',
        'price',
        'category_product_id',
        'is_best_seller',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_product_id');
    }

    public function links()
    {
        return $this->hasMany(ProductLink::class);
    }


    public function setOtherImageAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['other_image'] = implode('|', $value);
        } else {
            $this->attributes['other_image'] = $value;
        }
    }


}
