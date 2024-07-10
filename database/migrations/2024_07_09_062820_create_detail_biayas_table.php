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
        Schema::create('tr_biaya_details', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('biaya_id')
                ->constrained('tr_biayas')
                ->cascadeOnDelete();
            $table->foreignUlid('rapkdetail_id')
                ->constrained('tr_rapk_details')
                ->cascadeOnDelete();
            $table->foreignUlid('permintaan_id')
                ->nullable()
                ->constrained('tr_permintaans')
                ->cascadeOnDelete();
            $table->string('uraian');
            $table->decimal('volume', 12, 2);
            $table->decimal('harga', 12, 2);
            $table->decimal('jumlah', 12, 2);
            $table->decimal('ppn', 12, 2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_biaya_details');
    }
};
