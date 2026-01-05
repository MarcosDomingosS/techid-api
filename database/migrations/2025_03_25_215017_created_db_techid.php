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
        Schema::create('rfid', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50);
            $table->foreignId('sed_id')->references('id')->on('seds')->onDelete('cascade');
        });

        Schema::create('students', function (Blueprint $table) {
            $table->char('rm', 5)->primary();
            $table->string('name', 100);
            $table->foreignId('rfid_id')->nullable()->unique()->references('id')->on('rfid')->onDelete('cascade');
        });
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->timestamps();
            $table->foreignId('sed_id')->references('id')->on('seds')->onDelete('cascade');
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->dateTime('init_date');
            $table->dateTime('end_date');
            $table->timestamps();
            $table->foreignId('sed_id')->references('id')->on('seds')->onDelete('cascade');
        });
        Schema::create('routines', function (Blueprint $table) {
            $table->id();
            $table->string('name',60);
            $table->timestamps();
            $table->foreignId('sed_id')->references('id')->on('seds')->onDelete('cascade');
        });
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->foreignId('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('student_classes', function (Blueprint $table) {
            $table->id();
            $table->char('student_rm', 5);
            $table->foreign('student_rm')->references('rm')->on('students')->onDelete('cascade');
            $table->foreignId('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('report_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreignId('student_class_id')->references('id')->on('student_classes')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('report_routines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('routine_id')->references('id')->on('routines')->onDelete('cascade');
            $table->foreignId('student_class_id')->references('id')->on('student_classes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('rfid');
        Schema::dropIfExists('student');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('events');
        Schema::dropIfExists('routines');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('student_classes');
        Schema::dropIfExists('report_events');
        Schema::dropIfExists('repor_routines');
    }
};
