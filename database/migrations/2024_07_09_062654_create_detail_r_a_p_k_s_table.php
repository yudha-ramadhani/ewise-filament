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
        Schema::create('tr_rapk_details', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('rapk_id')
                ->constrained('tr_rapks')
                ->cascadeOnDelete();
            $table->foreignUlid('rabdetail_id')
                ->constrained('tr_rab_details')
                ->cascadeOnDelete();
            $table->foreignUlid('wbsdetail_id')
                ->constrained('master_detail_wbs')
                ->cascadeOnDelete();
            $table->foreignUlid('sumberdaya_id')
                ->constrained('master_sumberdayas')
                ->cascadeOnDelete();
            $table->foreignUlid('parent')
                ->nullable()
                ->constrained('tr_rapk_details')
                ->cascadeOnDelete();
            $table->decimal('volume', 12, 2);
            $table->decimal('harga', 12, 2);
            $table->decimal('total', 12, 2);
            $table->foreignUlid('created_by')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->foreignUlid('updated_by')
                ->constrained('users')
                ->cascadeOnDelete()
                ->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_rapk_details');
    }
};
