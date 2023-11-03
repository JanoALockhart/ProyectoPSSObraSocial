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
        Schema::create('minor18s', function (Blueprint $table) {
            $table->id();
            $table->string('DNI')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->date('birthDate');
            $table->string('phone');
            $table->string('address');
            $table->string('email')->unique();
            $table->unsignedBigInteger('client_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minor18s');
    }
};
