<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('administrator__information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('administratior_id');
            $table->date('birth_day');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('ward_id');
            $table->string('address');
            $table->timestamp('login_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            //References
            $table->foreign('administratior_id')->references('id')->on('administrators');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('ward_id')->references('id')->on('wards');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrator__information');
    }
};
