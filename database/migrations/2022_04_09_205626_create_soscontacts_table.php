<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoscontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soscontacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->string('contactname');
            $table->integer('phonenumber');
            $table->string('sosphoto')->nullable();
            $table->timestamps();
           // $table->foreign('userid')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soscontacts');
    }
}
