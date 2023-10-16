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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['Reintegro','Prestacion']);
            $table->date('date');
            $table->string('CBU');
            $table->string('recipient_DNI');
            $table->string('recipient_name');
            $table->string('recipient_last_name');
            $table->string('request_image_path');
            $table->decimal('amount',9,2);
            $table->enum('state',['Pendiente','Aprobado','Desaprobado']);
            $table->string('description');

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
