<?php

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
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->text('thumb')->nullable();
            $table->text('description')->nullable();
            $table->string('category', 100)->nullable();
            $table->date('release_year')->nullable();
            $table->string('latest_version')->nullable();
            $table->text('download_link')->nullable();
            $table->enum('supported_os', ['Windows', 'Mac', 'Linux'])->change();
            $table->tinyInteger('vote')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools');
    }
};
