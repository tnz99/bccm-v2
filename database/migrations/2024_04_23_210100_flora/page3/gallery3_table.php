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
        Schema::create('flora_page3_gallery3', function (Blueprint $table) {
            $table->id('flora_page3_gallery3_id');
            $table->string('flora_page3_gallery3_title');
            $table->string('flora_page3_gallery3_subtitle');
            $table->longText('flora_page3_gallery3_description');
            $table->string('flora_page3_gallery3_image')->nullable();

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
