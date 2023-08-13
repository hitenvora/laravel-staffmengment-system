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
        Schema::create('customers', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("fname");
            $table->string("lname");
            $table->string("email");
            $table->string("password");
            $table->bigInteger("phone");
            $table->string("gender");
            $table->string("hobby");
            $table->text("address");
            $table->string("photo");
            $table->integer("country_id")->unsigned();
            $table->foreign("country_id")->references('id')->on('countries');
            $table->integer("state_id")->unsigned();
            $table->foreign("state_id")->references('id')->on('states');
            $table->integer("city_id")->unsigned();
            $table->foreign("city_id")->references('id')->on('cities');
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
        Schema::dropIfExists('customers');
    }
};
