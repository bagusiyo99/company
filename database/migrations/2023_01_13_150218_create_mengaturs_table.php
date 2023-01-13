<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengaturs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul')->nullable();
            $table->text('deskripsi')->nullable();
            // $table->integer('icon');
            $table->text('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mengaturs');
    }
};
