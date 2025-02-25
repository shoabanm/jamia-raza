<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sub_campuses', function (Blueprint $table) {
            $table->id();
            $table->string('campus_name');
            $table->text('description');
            $table->integer('enrolled_students');
            $table->integer('teachers');
            $table->string('principal_in_charge');
            $table->string('principal_picture');
            $table->string('campus_picture');
            $table->string('address');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sub_campuses');
    }
};
