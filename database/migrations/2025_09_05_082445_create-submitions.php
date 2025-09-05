<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('submitions' , function ( Blueprint $table){
            $table->id() ;
            $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->foreignId('exam_id')->constrained('exams', 'id')->cascadeOnDelete();
            $table->string('status');
            $table->double('score');
            $table->dateTime('submitted_at');
            $table->timestamp('started_at');
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('submitions');
    }
};
