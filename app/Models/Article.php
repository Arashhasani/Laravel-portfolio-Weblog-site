<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['user_id','image','description','date','title','is_published'];
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);

    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function published()
    {
        if ($this->is_published==1){
            return true;
        }else{
            return false;
        }

    }

    public function articleGallerry()
    {
        return $this->hasMany(ArticleGallery::class);

    }
}
