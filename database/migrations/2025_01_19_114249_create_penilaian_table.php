<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianTable extends Migration
{
    public function up()
    {
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('responden_id')->constrained('responden')->onDelete('cascade');
            $table->string('kategori'); // Nama kategori (misalnya: 'sistem_elektronik')
            $table->json('jawaban');   // Jawaban dalam bentuk JSON
            $table->timestamps();
        });

    }
    public function down()
    {
        Schema::dropIfExists('penilaian');
    }
}


