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
        Schema::create('kingdom_gallery5', function (Blueprint $table) {

            $table->id('kingdom_galleries4_id');
            $table->string('kingdom_galleries4_title');
            $table->string('kingdom_galleries4_subtitle');
            $table->longText('kingdom_galleries4_description');
            $table->string('kingdom_galleries4_image')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
