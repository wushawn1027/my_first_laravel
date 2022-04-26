<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $img_path
 * @property integer $product_id
 * @property string $created_at
 * @property string $updated_at
 */
class Product_img extends Model
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
    protected $fillable = ['img_path', 'product_id', 'created_at', 'updated_at'];

    public function product(){
        // hasOne / hasMany 格式 (對照的model::class,'對方的欄位' ,'自己的欄位')
        // $this->hasOne(Produat::class, 'id', 'product_id');

        //或

        // belongsTo / belongsToMany 格式 (對照的model::class,'自己的欄位' ,'對方的欄位')
        $this->belongsTo(Produat::class, 'product_id', 'id');
    }
}
