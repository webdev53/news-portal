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
        Schema::create('top_advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('top_ad_one');
            $table->string('top_ad_one_url')->nullable();
            $table->string('top_ad_one_status');
            $table->string('top_ad_two');
            $table->string('top_ad_two_url')->nullable();
            $table->string('top_ad_two_status');
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
        Schema::dropIfExists('top_advertisements');
    }
};