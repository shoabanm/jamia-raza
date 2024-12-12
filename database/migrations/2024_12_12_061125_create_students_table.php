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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->date('dob');
            $table->text('address');
            $table->unsignedBigInteger('department_id'); // Foreign key from Department table
            $table->string('picture')->nullable(); // Picture URL
            $table->text('description')->nullable();
            $table->boolean('enrolled')->default(true);
            $table->boolean('passed_out')->default(false);
            $table->timestamps();
            
            // Define foreign key relationship
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
