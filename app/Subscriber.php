<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'name', 'address', 'start', 'duration', 'publication_code', 'count'
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class);
    }

    public function publication_id()
    {
        return $this->publication()->pluck('id')->first();
    }
}
