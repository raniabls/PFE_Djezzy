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
        Schema::create('bkeyy', function (Blueprint $table) {
            $table->id();
            $table->string('key_domain_name')->nullable();
            $table->string('key_set_name')->nullable();
            $table->string('key_set_id')->nullable();
            $table->string('key_domain_id')->nullable();
            $table->string('physical_table')->nullable();
            $table->string('filename')->nullable();
            $table->datetime('imported_at')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bkeyy');
    }
};
