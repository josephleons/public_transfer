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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_no');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('surname');
            $table->string('gender');
            $table->string('job_title');
            $table->string('department');
            $table->dateTime('hire_date');
            $table->double('salary');
            $table->string('photo');
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            // define foregn key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('employee');
    }
};
