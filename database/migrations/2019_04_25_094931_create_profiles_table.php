<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('user_fname');
            // $table->string('user_lname');
            $table->string('user_email')->unique();
            $table->string('user_phone');
            // $table->timestamp('email_verified_at')->nullable();
             // s
            $table->string('user_city');
            $table->string('user_photo');
            // $table->string('user_startdate');
            // $table->string('user_location');
            // $table->string('photo');
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
        Schema::dropIfExists('profiles');
    }
}
