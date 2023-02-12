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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('course_id');

            $table->string('name');
            $table->text('description');
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->date('start_date');
            $table->date('end_date');
            
            //Forign Keys
            $table->foreignId('admin_id')->references('admin_id')->on('admins');
            $table->foreignId('ins_id')->references('instructor_id')->on('instructors');

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
        Schema::dropIfExists('courses');
    }
};
