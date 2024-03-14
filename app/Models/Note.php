<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['content'];

    public function step1()
    {
        return $this->belongsTo(Step1::class);
    }
}
