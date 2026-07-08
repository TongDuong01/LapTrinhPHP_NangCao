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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('reservation_code',255);
            $table->date('reservation_date');
            $table->time('reservation_time');
            $table->enum('status',['pending','confirmed','cancelled','completed','seated'])->default('pending');
            $table->text('notes')->nullable();
            $table->string('table_number',255)->nullable();
            $table->string('customer_name',255);
            $table->string('customer_phone',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
