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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('name', 200);
            $table->string('email', 200);
            $table->string('phone', 20);
            $table->string('situation', 255);
            $table->timestamp('appointment_datetime')->useCurrent()->useCurrentOnUpdate();
            $table->string('doctor', 200);
            $table->text('message')->nullable();
            $table->enum('status', ['scheduled', 'canceled', 'completed'])->default('scheduled');

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
