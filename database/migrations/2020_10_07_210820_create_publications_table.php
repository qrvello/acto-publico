<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->boolean('state');
            $table->string('tags')->nullable();
            $table->string('character')->nullable();
            $table->string('turn');
            $table->integer('hours')->nullable();
            $table->date('date');
            $table->string('observation')->nullable();
            $table->foreignId('establishment_id');

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
        Schema::dropIfExists('publications');
    }
}
