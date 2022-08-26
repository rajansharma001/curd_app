<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     
    //creating database

    public function up()
    {
        Schema::create('emp_details', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->text('address',60);
            $table->string('phone',60);
            $table->string('email',60);
            $table->string('job_description',60);
            $table->string('salary',60);
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
        Schema::dropIfExists('curd');
    }
}
