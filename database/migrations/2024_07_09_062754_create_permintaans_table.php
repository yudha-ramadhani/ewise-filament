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
        Schema::create('tr_permintaans', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('proyek_id')
                ->constrained('proyeks')
                ->cascadeOnDelete();
            $table->string('no_bukti');
            $table->date('tgl_request');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_permintaans');
    }
};
