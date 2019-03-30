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

    public function subscribers()
    {
        return $this->hasMany(Subscriber::class);
    }

    public function addSubscriber($subscriber)
    {
        $this->subscribers()->create($subscriber);
    }
}
