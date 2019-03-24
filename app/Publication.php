<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'code', 'name', 'price'
    ];

    public function getPrice()
    {
        return number_format($this->price * 0.01, 2).'$';
    }
}
