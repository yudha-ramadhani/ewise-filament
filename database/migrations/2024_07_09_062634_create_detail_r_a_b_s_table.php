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
        Schema::create('tr_rab_details', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('rab_id')
                ->constrained('tr_rabs')
                ->cascadeOnDelete();
            $table->foreignUlid('parent')
                ->nullable()
                ->constrained('tr_rab_details')
                ->cascadeOnDelete();
            $table->text('isi');
            $table->decimal('nilai_kontrak', 12, 2);
            $table->foreignUlid('created_by')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->foreignUlid('updated_by')
                ->nullable()
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
        Schema::dropIfExists('tr_rab_details');
    }
};
