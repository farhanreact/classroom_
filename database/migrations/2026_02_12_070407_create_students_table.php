<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('name', 100);
        $table->unsignedBigInteger('classrooms_id');
        $table->enum('gender', ['L', 'P']);
        $table->timestamps();

        $table->foreign('classrooms_id')
              ->references('id')
              ->on('classrooms')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
