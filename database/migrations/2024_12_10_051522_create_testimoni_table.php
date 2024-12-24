<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimoni', function (Blueprint $table) {
            $table->id(); // creates an auto-incrementing id (primary key)
            $table->string('nama');
            $table->string('email')->unique();
            $table->text('kritik_dan_saran')->nullable();
            $table->text('testimoni')->nullable();
            $table->timestamps(); // Optional if you want to track created_at and updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimoni');
    }
}