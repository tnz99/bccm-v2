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
        Schema::create('kingdom_gallery_galleries_table', function (Blueprint $table) {
            $table->id('kingdom_galleries0_id');
            $table->string('kingdom_galleries0_title');
            $table->string('kingdom_galleries0_subtitle');
            $table->longText('kingdom_galleries0_description');
            $table->string('kingdom_galleries0_image')->nullable();

            $table->string('kingdom_galleries1_title');
            $table->string('kingdom_galleries1_subtitle');
            $table->longText('kingdom_galleries1_description');
            $table->string('kingdom_galleries1_image')->nullable();

            $table->string('kingdom_galleries2_title');
            $table->string('kingdom_galleries2_subtitle');
            $table->longText('kingdom_galleries2_description');
            $table->string('kingdom_galleries2_image')->nullable();

            $table->string('kingdom_galleries3_title');
            $table->string('kingdom_galleries3_subtitle');
            $table->longText('kingdom_galleries3_description');
            $table->string('kingdom_galleries3_image')->nullable();

            $table->string('kingdom_galleries4_title');
            $table->string('kingdom_galleries4_subtitle');
            $table->longText('kingdom_galleries4_description');
            $table->string('kingdom_galleries4_image')->nullable();

            $table->string('kingdom_galleries5_title');
            $table->string('kingdom_galleries5_subtitle');
            $table->longText('kingdom_galleries5_description');
            $table->string('kingdom_galleries5_image')->nullable();

            $table->string('kingdom_galleries6_title');
            $table->string('kingdom_galleries6_subtitle');
            $table->longText('kingdom_galleries6_description');
            $table->string('kingdom_galleries6_image')->nullable();

            $table->string('kingdom_galleries7_title');
            $table->string('kingdom_galleries7_subtitle');
            $table->longText('kingdom_galleries7_description');
            $table->string('kingdom_galleries7_image')->nullable();

            $table->string('kingdom_galleries8_title');
            $table->string('kingdom_galleries8_subtitle');
            $table->longText('kingdom_galleries8_description');
            $table->string('kingdom_galleries8_image')->nullable();

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
