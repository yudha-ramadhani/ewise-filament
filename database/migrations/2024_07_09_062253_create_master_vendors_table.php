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
        Schema::create('master_vendors', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('nama_vendor');
            $table->foreignId('tipeusaha_id')
                ->constrained('master_tipe_usahas')
                ->cascadeOnDelete();
            $table->string('domisili');
            $table->string('kodepos');
            $table->text('alamat');
            $table->string('taxnum')->nullable();
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
        Schema::dropIfExists('master_vendors');
    }
};
