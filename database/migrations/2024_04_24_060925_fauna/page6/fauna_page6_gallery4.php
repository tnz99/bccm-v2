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
        Schema::create('fauna_page6_gallery4', function (Blueprint $table) {
            $table->id('fauna_page6_gallery4_id');
            $table->string('fauna_page6_gallery4_title');
            $table->string('fauna_page6_gallery4_subtitle');
            $table->longText('fauna_page6_gallery4_description');
            $table->string('fauna_page6_gallery4_image')->nullable();

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
