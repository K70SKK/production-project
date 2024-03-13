<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step1 extends Model
{
    protected $table = 'step1';

    protected $fillable = [
        'first_responder_name',
        'company_data',
        'time',
        'case_number',
    ];
}