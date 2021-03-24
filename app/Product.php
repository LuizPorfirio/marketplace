<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'body', 'price', 'slug'];
    
    public function store()
    {
        //Este produto pertence a Loja
        return $this->belongsTo(Store::class);
    }

    public function categories()
    {
        //pertence a muitos com quem
        return $this->belongsToMany(Category::class);
    }
}
