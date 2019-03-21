<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'name', 'address', 'start', 'duraation', 'publication_code', 'count'
    ];
}
