<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_type_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('user_type_id')->unsigned()->nullable();
			$table->foreign('user_type_id')->references('id')->on('user_types')->onDelete('cascade');
            $table->integer('user_roles_id')->unsigned()->nullable();
			$table->foreign('user_roles_id')->references('id')->on('user_roles')->onDelete('cascade');
            $table->integer('programs_id')->unsigned()->nullable();
			$table->foreign('programs_id')->references('id')->on('programs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('use_type_details');
    }
};
