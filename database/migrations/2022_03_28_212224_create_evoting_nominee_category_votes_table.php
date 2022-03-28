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
        Schema::create('evoting_nominee_category_votes', function (Blueprint $table) {
            $table->id();
            $table->integer('evoting_nominee_category_id')->default(0);
            $table->integer('voter_id')->default(0);
            $table->integer('number_of_votes')->default(0);
            $table->string('reference')->default(0);
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
        Schema::dropIfExists('evoting_nominee_category_votes');
    }
};
