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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name_customer');
            $table->string('number_phone_customer');
            $table->foreignId('jenis_aduan_id')->constrained('jenis_aduan')->onDelete('cascade');
            $table->text('catatan')->nullable();
            $table->string('bukti_ss');
            $table->enum('status_aduan', ['proses', 'verifikasi', 'tolak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
