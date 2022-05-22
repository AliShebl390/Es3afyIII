<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_nationalid', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->string('front')->nullable();
            $table->string('back')->nullable();
            $table->string('selfie')->nullable();
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
        Schema::dropIfExists('_nationalid');
    }
}
