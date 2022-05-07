<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $subtotal
 * @property integer $shipping_fee
 * @property integer $total
 * @property integer $product_qty
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property integer $payway
 * @property integer $shipping_way
 * @property string $store_address
 * @property integer $status
 * @property string $ps
 * @property string $created_at
 * @property string $updated_at
 */
class Order extends Model
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
    protected $fillable = ['subtotal', 'shipping_fee', 'total', 'product_qty', 'name', 'phone', 'email', 'address', 'payway', 'shipping_way', 'store_address', 'status', 'ps', 'created_at', 'updated_at', 'user_id'];


    public function detail()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
