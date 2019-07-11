<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $casts = [
        'date' => 'datetime:Y.m.d',
    ];
}
