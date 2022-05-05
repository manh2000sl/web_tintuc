<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /* Quy ước đặt tên table
        tên model: Post => table: Posts
        tên model: ProductCategory => table: product_categories
    Mặc định laravel lấy id làm khóa chính
    */
    protected $guarded =[];
    protected $table = 'posts';
    protected $fillable = [
        'id',
        'title',
        'slug',
        'image',
        'topic',
        'summary',
        'content',
        'user_id',
        'highlight',
        'image_path',
        'status',
    ];
    public $timestamps = true;


    public function user(){
        return $this->belongsToMany(Permission::class,'permissions_role', 'role_id','permission_id');
    }
    // belongsTo tạo kết nối đên model User
    // 1 post sẽ có 1 user
    // belongsTo là nghich đảo của thằng hasmany
    public function toUser(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }
    public function toTopic(){
        return $this->belongsTo(Topic::class,'topic', 'id');
    }
    public function comments(){
        return $this->hasMany(Comment::class,'post_id', 'id');
    }


    public function getStatusNameAttribute():string
    {
        return ($this->status === 0)?'Ẩn':'Hiện';
    }    public function getHighlightNameAttribute():string
    {
        return ($this->highlight === 0)?'Ẩn':'Hiện';
    }
}
