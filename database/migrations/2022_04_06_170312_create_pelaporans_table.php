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
        Schema::create('pelaporans', function (Blueprint $table) {
            $table->id();
            $table->enum("status",["Diajukan","Menunggu Konfirmasi","Revisi","Selesai"]);
            $table->enum("status_detail",["Sedang direview oleh Manager","Sedang direview oleh KTT", "[Manager] Perlu Perbaikan", "[KTT] Perlu Perbaikan", "Selesai"]);
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
        Schema::dropIfExists('pelaporans');
    }
};
