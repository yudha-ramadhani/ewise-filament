<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('master_wbs', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignId('jenisproyek_id')
                ->constrained('master_jenis_proyeks')
                ->cascadeOnDelete();
            $table->string('nama_wbs');
            $table->string('kode');
            $table->foreignUlid('created_by')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_wbs');
    }
};
