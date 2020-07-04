<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->integer('designing')->nullable();
            $table->integer('web')->nullable();
            $table->integer('desktop')->nullable();
            $table->integer('mobile')->nullable();
            $table->integer('machine')->nullable();
            $table->integer('uzbek')->nullable();
            $table->integer('english')->nullable();
            $table->integer('russian')->nullable();
            $table->integer('spanish')->nullable();
            $table->integer('german')->nullable();
            $table->integer('leadership')->nullable();
            $table->integer('critical')->nullable();
            $table->integer('strategy')->nullable();
            $table->integer('project')->nullable();
            $table->integer('management')->nullable();
            $table->integer('communication')->nullable();
            $table->integer('entrepreneur')->nullable();
            $table->integer('marketing')->nullable();
            $table->integer('driving')->nullable();
            $table->integer('hardware')->nullable();

            $table->index('user_id');
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
        Schema::dropIfExists('skills');
    }
}
