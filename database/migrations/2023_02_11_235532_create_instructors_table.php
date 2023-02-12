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
        Schema::create('instructors', function (Blueprint $table) {
            $table->bigIncrements('instructor_id');

            $table->string('name',length:255);
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->decimal('salary', $precision = 8, $scale = 2);
            $table->enum('gender', ['male', 'female']);
            $table->date('dateofbirth');
            $table->string('address')->nullable();

            //Forign Keys
            $table->foreignId('admin_id')->references('admin_id')->on('admins');
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
        Schema::dropIfExists('instructors');
    }
};
