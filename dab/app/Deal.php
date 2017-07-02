<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = ['year','month','day','amount', 'category_id','item_id','attribute','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
