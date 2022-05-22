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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->boolean('create_institution');
            $table->boolean('edit_institution');
            $table->boolean('delete_institution');
            $table->boolean('create_user');
            $table->boolean('edit_user');
            $table->boolean('delete_user');
            $table->boolean('create_memories_owner');
            $table->boolean('edit_memories_owner');
            $table->boolean('delete_memories_owner');
            $table->boolean('create_memory');
            $table->boolean('edit_memory');
            $table->boolean('delete_memory');
            $table->boolean('link_memory');
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
        Schema::dropIfExists('roles');
    }
};
