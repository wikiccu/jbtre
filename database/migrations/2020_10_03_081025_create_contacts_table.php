<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('contacts', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('listing', 200);	
        //     $table->integer('listing_id');	
        //     $table->string('name', 200);
        //     $table->string('email', 100);
        //     $table->string('phone', 100);
        //     $table->text('message')->nullable();
        //     $table->integer('user_id');
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
        Schema::dropIfExists('contacts');
    }
}
