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
    { Schema::create('pelanggan', function (Blueprint $table) {
        $table->increments('pelanggan_id');
        $table->string('first_name', 100);
        $table->string('last_name', 100);
        $table->date('birthday')->nullable();
        $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
        $table->string('email')->unique();
        $table->string('phone', 20)->nullable();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
