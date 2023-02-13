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
        Schema::create('lectures', function (Blueprint $table) {
            $table->id('lecture_id');
            $table->string('lecture_title');
            $table->string('lecture_link');
            $table->string('lecture_pass_code');
            $table->string('lecture_assignment_link');
            $table->boolean('attendance')->default(false);
            $table->integer('assignment_evaluation');
            $table->integer('search_task');
            $table->timestamps('lecture_published_date');
            $table->timestamps('assignment_dead_time');
            $table->foreignId('group_id')->constrained('groups')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
};
