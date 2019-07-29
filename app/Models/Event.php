<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'name',
        'target',
        'user_id'
    ];

    public $rules = [
        'name' => 'required',
        'target' => 'date|required'
    ];
}
