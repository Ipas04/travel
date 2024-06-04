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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('destination_id');
            $table->string('nama');
            $table->string('nomor_telepon');
            $table->string('alamat');
            $table->boolean('dokumentasi')->default(false);
            $table->integer('jumlah_orang');
            $table->date('tanggal');
            $table->integer('total_pembayaran');
            $table->enum('status', ['Pending', 'Success', 'Cancel'])->default('Pending');

            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
