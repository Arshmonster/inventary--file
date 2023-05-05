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
        Schema::create('purchaser_masters', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_id');
            $table->date('receiving_date');
            $table->string('invoice_number');
            $table->string('purchaser_name');
            $table->string('contact');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchaser_masters');
    }
};
