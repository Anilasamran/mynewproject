<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table='products';
    protected $primarykey='id';
    protected $fillable=['name', 'price', 'discount_price', 'color', 'quantity','sale_qty','remain_qty', 'category', 'gallery', 'description',
'new'];


public function colors()
{
    return $this->hasMany(Colors::class, 'product_id'); 
}

}
