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
        Schema::create('kingdom_home_table', function (Blueprint $table) {
            $table->id('kingdom_home_id');
            $table->string('kingdom_home_title');
            $table->longText('kingdom_home_description');
            $table->string('kingdom_home_image')->nullable();

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
