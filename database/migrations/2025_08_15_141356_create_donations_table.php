<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->decimal('amount', 10, 2);
            $table->string('payment_method'); // paystack or kora
            $table->string('payment_reference')->nullable();
            $table->string('status')->default('pending'); // pending, success, failed
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
