<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ShoppingCart;

/**
 * @property integer $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $img_path
 * @property string $name
 * @property string $price
 * @property string $quantity
 * @property string $introduction
 */
class Product extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'img_path', 'name', 'price', 'quantity', 'introduction'];

    // 每一筆商品資料

    public function imgs(){

        // 可以有很多張商品圖片
        return $this->hasMany(Product_img::class, 'product_id', 'id'); // 因為是hasMany,所以會輸出一個陣列
    }

    public function shoppingCart(){

        // 可以存在很多購物車內
        return $this->hasMany(ShoppingCart::class, 'product_id', 'id');
    }
}
