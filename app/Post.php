<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function addComment($body){
        $this->comments()->create(compact('body'));
    }

    public static function archives(){
        return static::selectRaw('year(created_at) year,monthname(created_at) month,count(*) published')
            ->orderByRaw('min(created_at) desc')
            ->groupBy('year','month')
            ->get()
            ->toArray();
    }
}
