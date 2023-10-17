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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('DNI')->unique();
            $table->date('registration_date');
            $table->string('plan');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->dropForeign('requests_client_id_foreign'); // Eliminar la restricción en la tabla 'requests'
        });
    
        Schema::dropIfExists('clients'); // Eliminar la tabla 'clients' con CASCADE
    }
    
};
