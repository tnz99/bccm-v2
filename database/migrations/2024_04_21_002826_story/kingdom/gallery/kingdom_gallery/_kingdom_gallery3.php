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
        Schema::create('kingdom_gallery3', function (Blueprint $table) {
            $table->id('kingdom_galleries2_id');
            $table->string('kingdom_galleries2_title');
            $table->string('kingdom_galleries2_subtitle');
            $table->longText('kingdom_galleries2_description');
            $table->string('kingdom_galleries2_image')->nullable();
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
