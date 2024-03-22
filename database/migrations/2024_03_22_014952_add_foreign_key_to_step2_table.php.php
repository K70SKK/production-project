<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToStep2Table extends Migration
{
    public function up()
    {
        Schema::table('step2', function (Blueprint $table) {
            $table->unsignedBigInteger('step1_id');
            $table->foreign('step1_id')->references('id')->on('step1')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('step2', function (Blueprint $table) {
            $table->dropForeign(['step1_id']);
            $table->dropColumn('step1_id');
        });
    }
}
