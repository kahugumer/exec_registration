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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string("first_name",255);
            $table->string("middle_name",255);
            $table->string("surname",255);
            $table->string("email")->nullable();
            $table->string("email2")->nullable();
            $table->integer("phone")->unique();
            $table->string("institution");
            $table->string("qualification");
            $table->string("course");
            $table->integer("duration_of_study,10");
            $table->integer("year_of_leadership");
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
        Schema::dropIfExists('details');
    }
};
