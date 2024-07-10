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
        Schema::create('proyeks', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('nama_proyek');
            $table->foreignId('jenisproyek_id')
                ->constrained('master_jenis_proyeks')
                ->cascadeOnDelete();
            $table->string('deskripsi');
            $table->decimal('nilai', 12, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyeks');
    }
};
