<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $table = 'channels';
    protected $primaryKey = 'id';

    public function scopeActive($query,$status)
    {
        return $query->where('status',$status)
        ->select('id','name','type','image','slug')->orderBy('created_at','desc');
    }

    public function scopeCategory($query, $category)
    {
        return $query->where('category_id',$category);
    }

    public function scopeDetailChannel($query,$channel)
    {
        return $query->where('id',$channel)->select('id','name','type','image','slug','url');
    }
}
