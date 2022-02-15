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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('id_laporan');
            $table->foreignIdFor(\App\Models\Menu::class)->nullable();
            $table->string('name');
            $table->enum('type',['image','video','imagevideo','text','option'])->nullable();
            $table->unsignedBigInteger('parent_laporan')->nullable();
            $table->boolean('have_child')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
};
