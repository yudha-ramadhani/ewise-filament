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
        Schema::create('tr_biayas', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('proyek_id')
                ->constrained('proyeks')
                ->cascadeOnDelete();
            $table->string('no_bukti');
            $table->date('tanggal_bukti');
            $table->foreignUlid('vendor_id')
                ->constrained('master_vendors')
                ->cascadeOnDelete();
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->foreignId('jenisdokumen_id')
                ->constrained('master_jenis_dokumens')
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
        Schema::dropIfExists('tr_biayas');
    }
};
