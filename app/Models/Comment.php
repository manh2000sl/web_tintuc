<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = [
        'post_id',
        'user_id',
        'content',
        'parent_id',
        'status',
    ];


    public function user(){
        return $this->hasOne(user::class,'id','user_id');
    }
    public function repcmt(){
        return $this->hasMany(comment::class,'parent_id','id');
    }
}
