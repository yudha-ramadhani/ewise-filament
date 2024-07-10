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
        Schema::create('tr_permintaan_details', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('permintaan_id')
                ->constrained('tr_permintaans')
                ->cascadeOnDelete();
            $table->foreignUlid('rapkdetail_id')
                ->constrained('tr_rapk_details')
                ->cascadeOnDelete();
            $table->string('uraian');
            $table->decimal('volume', 12, 2);
            $table->string('keterangan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_permintaan_details');
    }
};
