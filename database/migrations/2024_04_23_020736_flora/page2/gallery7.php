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
        Schema::create('flora_page2_gallery7', function (Blueprint $table) {
            $table->id('flora_page2_gallery7_id');
            $table->string('flora_page2_gallery7_title');
            $table->string('flora_page2_gallery7_subtitle');
            $table->longText('flora_page2_gallery7_description');
            $table->string('flora_page2_gallery7_image')->nullable();

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
