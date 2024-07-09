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
        Schema::create('master_detail_w_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('level');
            $table->foreignId('parent')
                ->nullable()
                ->constrained('master_detail_w_b_s')
                ->cascadeOnDelete();
            $table->string('deskripsi');
            $table->foreignId('wbs_id')
                ->constrained('master_w_b_s')
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
        Schema::dropIfExists('master_detail_w_b_s');
    }
};
