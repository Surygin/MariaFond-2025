<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requisites', function (Blueprint $table) {
            $table->id();

            $table->string('inn');
            $table->string('rs');
            $table->string('ks');
            $table->string('kpp');
            $table->string('bik');
            $table->string('ogrn');
            $table->string('recipient');
            $table->string('bank_title');
            $table->string('bank_address');

            $table->foreignId('company_id')->index()->constrained('companies');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisites');
    }
};
