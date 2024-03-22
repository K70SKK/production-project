<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Step1; // Import the Step1 model

class Step2 extends Model
{
    protected $table = 'step2';
    protected $fillable = [
        'note',
        'datetime',
        'step1_id', // Include the foreign key in the fillable array
    ];

    // Define the relationship with Step1 model
    public function step1()
    {
        return $this->belongsTo(Step1::class);
    }
}
