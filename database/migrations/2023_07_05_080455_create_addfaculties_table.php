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
        Schema::create('addfaculties', function (Blueprint $table) {
            $table->increments("id");
            $table->string("photo");
            $table->string("name");
            $table->integer("department_id")->unsigned();
            $table->foreign("department_id")->references('id')->on('adddepartments');
            $table->integer("college_id")->unsigned();
            $table->foreign("college_id")->references('id')->on('addcolleges');
            $table->string("subject");
            $table->integer("age");
            $table->bigInteger("mobile");
            $table->text("address");
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
        Schema::dropIfExists('addfaculties');
    }
};
