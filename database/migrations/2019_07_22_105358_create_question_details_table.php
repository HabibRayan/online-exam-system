<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_details', function (Blueprint $table) {
            $table->bigIncrements('qd_id');
            $table->unsignedBigInteger('qd_question_id');
//            $table->string('qd_name');
            $table->string('qd_value');
            $table->boolean('qd_correct')->default(0);
            $table->timestamps();

            $table->foreign('qd_question_id')->references('question_id')
                ->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_details');
    }
}
