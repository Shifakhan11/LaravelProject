<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('student_results', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subject');
            $table->integer('marks');
            $table->string('grade');
            $table->string('status');
            $table->string('remarks');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('student_results');
    }
};