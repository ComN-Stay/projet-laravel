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
        Schema::create('library', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')
                ->references('id')
                ->on('gender')
                ->onDelete('cascade');
            $table->unsignedBigInteger('artist_id');
            $table->foreign('artist_id')
                ->references('id')
                ->on('artist')
                ->onDelete('cascade');
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
        //
    }
};
