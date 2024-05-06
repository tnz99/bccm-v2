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
        Schema::create('fauna_page6_gallery1', function (Blueprint $table) {
            $table->id('fauna_page6_gallery1_id');
            $table->string('fauna_page6_gallery1_title');
            $table->string('fauna_page6_gallery1_subtitle');
            $table->longText('fauna_page6_gallery1_description');
            $table->string('fauna_page6_gallery1_image')->nullable();

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
