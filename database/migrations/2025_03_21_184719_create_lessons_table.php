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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedInteger('room_id');
            $table->unsignedInteger('timeslot_id');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('student_group_id');
            $table->unsignedInteger('curriculum_unit_id');

            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('timeslot_id')->references('id')->on('timeslots');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('student_group_id')->references('id')->on('student_groups');
            $table->foreign('curriculum_unit_id')->references('id')->on('curriculum_units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
