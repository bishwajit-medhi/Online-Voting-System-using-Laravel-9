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
        Schema::create('votecounts', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('candidate_id')->constrained();
            $table->unsignedBigInteger('candidate_id');
            $table->string('position');
            $table->integer('votecount')->default('0');
            $table->tinyInteger('iswinner')->default('0');
            $table->timestamps();

            $table->foreign('candidate_id')->references('id')->on('candidates')->onUpdate('cascade')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votecounts');
    }
};
