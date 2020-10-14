<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealtorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('realtors', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name',200);
        //     $table->string('photo',500);
        //     $table->text('description')->nullable();
        //     $table->string('phone',20);
        //     $table->string('email',50);
        //     $table->boolean('is_mvp');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realtors');
    }
}
