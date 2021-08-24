<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrolementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('subscription_is_paid')->default(false) ; 
            $table->integer('course_id')->nullable() ;
            $table->integer('event_id')->nullable() ;
            $table->integer('user_id') ;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade') ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolement');
    }
}
