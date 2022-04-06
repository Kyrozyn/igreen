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
        Schema::create('history_pelaporans', function (Blueprint $table) {
            $table->id();
            $table->enum("Status",["Dibuka","Ditutup","Perlu Perbaikan"]);
            $table->foreignIdFor(\App\Models\Pelaporan::class);
            $table->foreignIdFor(\App\Models\User::class);
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
        Schema::dropIfExists('history_pelaporans');
    }
};
