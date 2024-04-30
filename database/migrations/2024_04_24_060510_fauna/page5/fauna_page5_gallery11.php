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
        Schema::create('fauna_page5_gallery11', function (Blueprint $table) {
            $table->id('fauna_page5_gallery11_id');
            $table->string('fauna_page5_gallery11_title');
            $table->string('fauna_page5_gallery11_subtitle');
            $table->longText('fauna_page5_gallery11_description');
            $table->string('fauna_page5_gallery11_image')->nullable();

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
