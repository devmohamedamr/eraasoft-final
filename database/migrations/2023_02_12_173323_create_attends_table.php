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
        //PIVOT TABLE

        Schema::create('attends', function (Blueprint $table) {
            


            $table->primary(['lec_id','std_id']);

            //Forign Keys
            $table->foreignId('lec_id')->references('lec_id')->on('lectures');
            $table->foreignId('std_id')->references('student_id')->on('students');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attends');
    }
};
