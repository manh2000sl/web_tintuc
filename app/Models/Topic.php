<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use SoftDeletes;
    protected $guarded =[];
  protected $table = 'topic';
    protected $fillable = [
        'name',
        'slug',
    ];
  public $timestamps = false;
      public function Post(){
          return $this->hasMany(Post::class,'topic');
  }
  public function Post1(){
          return $this->hasMany(Post::class,'topic','slug');
  }
}
