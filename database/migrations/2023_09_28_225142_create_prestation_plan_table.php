<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestationPlanTable extends Migration
{
    public function up()
    {
        Schema::create('prestation_plan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prestation_id');
            $table->unsignedBigInteger('plan_id');
            $table->timestamps();
    
            // Definir las claves foráneas
            $table->foreign('prestation_id')->references('id')->on('prestations');
            $table->foreign('plan_id')->references('id')->on('plans');
    
            // Definir un índice único en las combinaciones de claves foráneas
            $table->unique(['prestation_id', 'plan_id']);
        });
    }
    

    public function down()
    {
        Schema::dropIfExists('prestation_plan');
    }
};
