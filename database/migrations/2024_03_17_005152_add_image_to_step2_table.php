<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToStep2Table extends Migration
{
    public function up()
    {
        Schema::table('step2', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }

    public function down()
    {
        Schema::table('step2', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
