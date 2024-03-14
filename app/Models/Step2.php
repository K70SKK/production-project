<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step2 extends Model
{
    protected $table = 'step2';
    protected $fillable = [
        'note',
        'datetime',
    ];
}
