<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'name', 'surname', 'school', 'age', 'languages'
    ];

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    public function createParticipant($participant)
    {
        $this->participants()->create($participant);
    }
}
