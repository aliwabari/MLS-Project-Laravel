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
        Schema::create('student_answers', function(Blueprint $table){
            $table->id();
            $table->foreignId('exam_id')->constrained('exams','id')->cascadeOnDelete();
            $table->foreignId('question_id')->constrained('questions','id')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete();
            $table->foreignId('option_id')->constrained('options','id')->cascadeOnDelete();
            $table->text('answer')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('student_asnwers');
    }
};
