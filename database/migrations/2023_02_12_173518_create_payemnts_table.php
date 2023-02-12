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
        Schema::create('payemnts', function (Blueprint $table) {
            $table->bigIncrements('pay_id');
            $table->decimal('amount',$precision = 8, $scale = 2);

            //Forign Keys
            $table->foreignId('course_id')->references('course_id')->on('courses');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payemnts');
    }
};
