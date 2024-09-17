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
        Schema::create('pelamars', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id');
            $table->string('nama_lengkap');
            $table->LongText('alamat');
            $table->string('nomor_wa');
            $table->string('we_chat');
            $table->string('gaji_permintaan');
            $table->string('mandarin_level');
            $table->string('kelulusan');
            $table->string('file_cv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelamars');
    }
};
