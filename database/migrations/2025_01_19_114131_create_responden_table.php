<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespondenTable extends Migration
{
    public function up()
    {
        Schema::create('responden', function (Blueprint $table) {
            $table->id();
            $table->string('institution');
            $table->text('address');
            $table->string('phone');
            $table->string('email');
            $table->string('evaluator');
            $table->string('position');
            $table->date('date');
            $table->text('scope');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('identitas_responden');
    }
}
