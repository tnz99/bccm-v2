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
        Schema::create('fauna_page3_gallery2', function (Blueprint $table) {
            $table->id('fauna_page3_gallery2_id');
            $table->string('fauna_page3_gallery2_title');
            $table->string('fauna_page3_gallery2_subtitle');
            $table->longText('fauna_page3_gallery2_description');
            $table->string('fauna_page3_gallery2_image')->nullable();

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
