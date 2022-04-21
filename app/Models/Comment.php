<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // 使用的資料庫表單名稱
    protected $table = 'comments';

    // 資料表的主key 通常會有索引的腳色(不可重複, 會自動累加的特性)
    protected $primaryKey = 'id';

    // model可以使用 白名單 或 黑名單(只能二選一) 去設定可填寫的欄位

    protected $fillable = ['title','name','content']; // 白:整張表格只有左邊三個可以被填寫

    // protected $guard = ['created_at','updated_at','id']; // 黑:除了左邊三個以外,其他可以被填寫
}
