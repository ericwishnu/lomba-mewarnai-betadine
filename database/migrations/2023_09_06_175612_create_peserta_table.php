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
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('mother_name');
            $table->string('kids_name');
            $table->integer('kids_age');
            $table->text('student_id_url')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('instagram')->nullable();
            $table->text('purchase_receipt_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
