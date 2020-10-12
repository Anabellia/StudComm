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
            $table->timestamps();
            $table->string('name');
            $table->integer('grade');
            $table->integer('teacher_id');
            $table->text('used_comments');
            $table->text('about_student');
            //gender:Female, Male, Others
            $table->string('gender');
            //categories(0-5): Introduction, Behavior, Speaking, Reading, Writing, Listening, Comprehension, Subject, Conclusion	
            $table->integer('Introduction')->nullable();
            $table->integer('Behavior')->nullable();
            $table->integer('Speaking')->nullable();
            $table->integer('Reading')->nullable();
            $table->integer('Writing')->nullable();
            $table->integer('Listening')->nullable();
            $table->integer('Comprehension')->nullable();
            $table->integer('Subject')->nullable();
            $table->integer('Conclusion')->nullable();
            //old ostavljam ali mislim da je necu koristiti suvise mmi complikovano
            $table->json('categories')->nullable();

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
