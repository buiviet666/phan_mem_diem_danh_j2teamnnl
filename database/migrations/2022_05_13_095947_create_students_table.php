<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('avatar')->nullable();
            $table->foreignId('classroom_id')->constrained('classrooms');
            $table->string('email')->unique();
            $table->string('phone', 15)->unique();
            $table->boolean('gender')->default(0);
            $table->string('address', 200);
            $table->string('password', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}