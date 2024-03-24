<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Step1; 

class Step2 extends Model
{
    protected $table = 'step2';
    protected $fillable = [
        'note',
        'datetime',
        'step1_id', 
    ];

    
    public function step1()
    {
        return $this->belongsTo(Step1::class);
    }
}
