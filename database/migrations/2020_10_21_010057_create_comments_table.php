<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('Introduction0'); 
            $table->text('Introduction1');       
            $table->text('Introduction2');
            $table->text('Introduction3');
            $table->text('Behavior0');
            $table->text('Behavior1');
            $table->text('Behavior2');
            $table->text('Behavior3');
            $table->text('Speaking0');
            $table->text('Speaking1');
            $table->text('Speaking2');
            $table->text('Speaking3');
            $table->text('Reading0');
            $table->text('Reading1');
            $table->text('Reading2');
            $table->text('Reading3');
            $table->text('Writing0');
            $table->text('Writing1');
            $table->text('Writing2');
            $table->text('Writing3');
            $table->text('Listening0');
            $table->text('Listening1');
            $table->text('Listening2');
            $table->text('Listening3');
            $table->text('Comprehension0');
            $table->text('Comprehension1');
            $table->text('Comprehension2');
            $table->text('Comprehension3');
            $table->text('Subject0');
            $table->text('Subject1');
            $table->text('Subject2');
            $table->text('Subject3');
            $table->text('Conclusion0');
            $table->text('Conclusion1');
            $table->text('Conclusion2');
            $table->text('Conclusion3');

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
