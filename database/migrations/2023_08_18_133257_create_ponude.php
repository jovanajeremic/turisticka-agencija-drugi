<?php

use App\Models\Drzava;
use App\Models\Ponuda;
use App\Models\Tip;
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
        Schema::create(Ponuda::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('opis');
            $table->integer('cena');
            $table->unsignedBigInteger('tip_id');
            $table->unsignedBigInteger('zemlja_id');
            $table->timestamps();
        });

        Schema::table(Ponuda::TABLE, function (Blueprint $table) {
            $table->foreign('tip_id')->references('id')->on(Tip::TABLE);
            $table->foreign('zemlja_id')->references('id')->on(Drzava::TABLE);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Ponuda::TABLE);
    }
};
