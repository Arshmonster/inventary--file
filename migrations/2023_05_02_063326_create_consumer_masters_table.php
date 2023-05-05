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
        Schema::create('consumer_masters', function (Blueprint $table) {
            $table->id();
            $table->string('consumer_name');
            $table->string('contact');
            $table->string("address");
            $table->string('purchaser_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumer_masters');
    }
};
