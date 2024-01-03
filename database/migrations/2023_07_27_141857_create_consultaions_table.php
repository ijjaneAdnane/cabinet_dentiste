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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('medecin_id')->constrained('medecins')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('facture_id')->constrained('factures')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_consultation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
