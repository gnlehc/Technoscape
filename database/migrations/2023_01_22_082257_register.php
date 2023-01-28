<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accs', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string('Name');
            $table->string('Email');
            $table->string('password');
            $table->string('Pass');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('forkey');
            // $table->rememberToken();
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
        Schema::dropIfExists('accs');
    }
};
