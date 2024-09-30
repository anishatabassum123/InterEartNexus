<?php

use App\Models\Factor;
use App\Models\Continent;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('continent_factors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('continent_id')->constrained('continents')->onDelete('cascade');
            $table->foreignId('factor_id')->constrained('factors')->onDelete('cascade');
            $table->string('descriptions')->nullable();
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('continent_factors');
    }
};
