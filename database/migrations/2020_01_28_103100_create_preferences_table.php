<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');

            $table->string('education')->nullable();
            $table->string('marketing')->nullable();
            $table->string('construction')->nullable();
            $table->string('office')->nullable();
            $table->string('service')->nullable();
            $table->string('distance')->nullable();
            $table->string('engineering')->nullable();
            $table->string('development')->nullable();
            $table->string('region')->nullable();
            $table->string('salary')->nullable();

            $table->string('type')->nullable();
            $table->string('time')->nullable();

            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preferences');
    }
}
