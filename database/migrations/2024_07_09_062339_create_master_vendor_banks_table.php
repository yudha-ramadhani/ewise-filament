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
        Schema::create('master_vendor_banks', function (Blueprint $table) {
            $table->id();
            $table->foreignUlid('vendor_id')
                ->constrained('master_vendors')
                ->cascadeOnDelete();
            $table->string('nama_bank');
            $table->string('negara');
            $table->string('alamat');
            $table->string('no_rekening');
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
        Schema::dropIfExists('master_vendor_banks');
    }
};
