<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    private $profit = 0;

    protected $fillable = [
        'code', 'name', 'price'
    ];

    public function getPrice()
    {
        return number_format($this->price * 0.01, 2).'$';
    }

    public function getProfit()
    {
        $profit = 0;
        $subs = $this->subscribers();
        //dd($subs);
        foreach ($subs as $sub)
        {
            dd($sub);
            $profit += ($this->price * $sub->count * $subs->duration);
        }

        return $profit;
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
