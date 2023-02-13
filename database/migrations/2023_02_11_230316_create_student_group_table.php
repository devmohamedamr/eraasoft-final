<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_group', function (Blueprint $table) {
            $table->integer('student_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->foreign('student_id')->references('student_id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('group_id')->references('group_id')->on('groups')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_group');
    }
};
