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
        Schema::create('tr_rapks', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('proyek_id')
                ->constrained('proyeks')
                ->cascadeOnDelete();
            $table->boolean('locked')
                ->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_rapks');
    }
};
