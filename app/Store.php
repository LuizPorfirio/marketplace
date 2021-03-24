<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'description', 'phone', 'mobile_phone', 'slug'];
    
    public function user()
    {
        //Esta Loja "Store" pertence a um usuario
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        //Esta loja tem muitos produtos
        return $this->hasMany(Product::class);
    }
}
