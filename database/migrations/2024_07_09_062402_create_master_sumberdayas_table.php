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
        Schema::create('master_sumberdayas', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('kode_resources')->unique();
            $table->string('nama_sumberdaya');
            $table->string('satuan');
            $table->foreignId('tipesumberdaya_id')
                ->constrained('master_tipe_sumberdayas')
                ->cascadeOnDelete();
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
        Schema::dropIfExists('master_sumberdayas');
    }
};
