<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['name','email','commentable_id','commentable_type','comment','is_approved'];
    use HasFactory;

    public function commentable()
    {
        return $this->morphTo();
    }

    public function is_approved()
    {
        if ($this->is_approved==1){
            return true;
        }else{
            return false;
        }
    }
}
