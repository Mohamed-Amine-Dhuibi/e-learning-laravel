<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title') ;
            $table->string('course_brief') ;
            $table->integer('nb_chapters')->nullable()->default(0) ;
            $table->float('course_fee') ;
            $table->integer('category_id') ; 
            $table->string('cover_image')->default('no_image.jpg') ; 
            $table->integer('status')->nullable()->default(0) ; 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
