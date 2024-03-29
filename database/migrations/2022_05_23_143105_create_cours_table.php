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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->string('prix');
            $table->string('titre');
            $table->longText('description');
            $table->foreignId('slide_id')->constrained('slides', 'id')->onDelete('cascade');
            $table->string('start');
            $table->string('temps');
            $table->string('niveau');
            $table->string('discipline');
            $table->string('date');
            $table->string('status') ;
            $table->integer('views')->default(0);
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
        Schema::dropIfExists('cours');
    }
};
