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
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->string('description', 200)->default('No Description');
            $table->string('slug', 50);
            $table->enum('category', ['Simple Melee Weapons', 'Simple Ranged Weapons', 'Martial Melee Weapons', 'Martial Ranged Weapons']);
            $table->string('type', 50);
            $table->string('weight', 10);
            $table->string('cost', 20);

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
        Schema::dropIfExists('items');
    }
};
