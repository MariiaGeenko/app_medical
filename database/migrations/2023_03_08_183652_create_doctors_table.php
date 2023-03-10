<?php

declare(strict_types=1);

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
    public function up(): void
    {
        Schema::create('doctors', static function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->json('working_mode');
            $table->string('refresh_token');
            $table->string('access_token');
            $table->boolean('is_online');
            $table->id('speciality_id');
            $table->string('name');
            $table->string('surname');
            $table->id('education_organization_id');
            $table->id('status_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
