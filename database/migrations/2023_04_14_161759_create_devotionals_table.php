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
        Schema::create('devotionals', function (Blueprint $table) {
            $table->id();
            $table->string('opening_prayer');
            $table->string('topic');
            $table->string('bible_text');
            $table->string('memory_verse');
            $table->string('devotion');
            $table->string('closing_prayer');
            $table->date('date');
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
        Schema::dropIfExists('devotionals');
    }
};
