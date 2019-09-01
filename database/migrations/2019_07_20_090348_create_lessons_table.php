<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('lesson_id');
            $table->string('lesson_title');
            $table->unsignedBigInteger('lesson_category_id');
            $table->string('lesson_minute');
            $table->text('lesson_description');
            $table->text('lesson_text');
            $table->timestamps();


            $table->foreign('lesson_category_id')->references('category_id')
                ->on('categories')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     function down()
    {
        Schema::dropIfExists('lessons');
    }
}
