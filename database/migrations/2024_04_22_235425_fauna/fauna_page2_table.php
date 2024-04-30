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
        Schema::create('fauna_page2_table', function (Blueprint $table) {
            $table->id('fauna_page2_id');
            $table->string('fauna_page2_title');
            $table->longText('fauna_page2_description');
            $table->string('fauna_page2_image')->nullable();

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

