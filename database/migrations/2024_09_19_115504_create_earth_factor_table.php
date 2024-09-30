<?php

use App\Models\Continent;
use App\Models\Country;
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
        Schema::create('earth_factor', function (Blueprint $table) {
            $table->id();
            $table->string('continent')->nullable();
            $table->string('country')->nullable();
            $table->text('rain_assumption')->nullable();
            $table->string('rain_assumption_url')->nullable();
            $table->text('land_soility')->nullable();
            $table->string('land_soility_url')->nullable();
            $table->text('forest_assumption')->nullable();
            $table->string('forest_assumption_url')->nullable();
            $table->text('temperature')->nullable();
            $table->string('temperature_url')->nullable();
            $table->text('perception')->nullable();
            $table->string('perception_url')->nullable();
            $table->text('humidity')->nullable();
            $table->string('humidity_url')->nullable();
            $table->text('warning_alerts')->nullable();
            $table->string('warning_alerts_url')->nullable();
            $table->text('wind')->nullable();
            $table->string('wind_url')->nullable();
            $table->text('air_quality')->nullable();
            $table->string('air_quality_url')->nullable();
            $table->text('climate_change_note')->nullable();
            $table->string('climate_change_note_url')->nullable();
            $table->text('co2_assumption')->nullable();
            $table->string('co2_assumption_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earth_factor');
    }
};
