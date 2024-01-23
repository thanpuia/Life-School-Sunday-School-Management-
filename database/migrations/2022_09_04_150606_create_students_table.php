<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("department_id")->nullable();
            
            $table->string("name")->nullable();
            $table->string("fathers_name")->nullable();
            $table->string("mothers_name")->nullable();
            $table->string("guardian")->nullable();
            $table->string("dob")->nullable();
            $table->string("phone1")->nullable();
            $table->string("phone2")->nullable();
            $table->string("bial")->nullable();
            $table->string("section")->nullable();
            $table->string("location")->nullable();
            $table->string("photo")->nullable();

            $table->string("param1")->nullable();
            $table->string("param2")->nullable();
            $table->string("param3")->nullable();
            $table->string("param4")->nullable();
            $table->string("param5")->nullable();
            $table->string("param6")->nullable();
            $table->string("param7")->nullable();
            $table->string("param8")->nullable();
            $table->string("param9")->nullable();
            $table->string("param10")->nullable();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('department_id')->references('id')->on('department');

            $table->softDeletes();
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
        Schema::dropIfExists('students');
    }
}
