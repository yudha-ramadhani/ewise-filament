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
        Schema::create('master_detail_wbs', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('kode');
            $table->string('level');
            $table->foreignUlid('parent')
                ->nullable()
                ->constrained('master_detail_wbs')
                ->cascadeOnDelete();
            $table->string('deskripsi');
            $table->foreignUlid('wbs_id')
                ->constrained('master_wbs')
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
        Schema::dropIfExists('master_detail_wbs');
    }
};
