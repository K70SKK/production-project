<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStep1Table extends Migration
{
    public function up()
    {
        Schema::create('step1', function (Blueprint $table) {
            $table->id();
            $table->string('first_responder_name');
            $table->string('company_data');
            $table->dateTime('time');
            $table->string('case_number');
            $table->text('notes')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('step1');
    }
}
