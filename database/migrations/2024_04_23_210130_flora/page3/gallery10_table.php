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
        Schema::create('flora_page3_gallery10', function (Blueprint $table) {
            $table->id('flora_page3_gallery10_id');
            $table->string('flora_page3_gallery10_title');
            $table->string('flora_page3_gallery10_subtitle');
            $table->longText('flora_page3_gallery10_description');
            $table->string('flora_page3_gallery10_image')->nullable();

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
