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
        Schema::create('fauna_page7_gallery3', function (Blueprint $table) {
            $table->id('fauna_page7_gallery3_id');
            $table->string('fauna_page7_gallery3_title');
            $table->string('fauna_page7_gallery3_subtitle');
            $table->longText('fauna_page7_gallery3_description');
            $table->string('fauna_page7_gallery3_image')->nullable();

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
