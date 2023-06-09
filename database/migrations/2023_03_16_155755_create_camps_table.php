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
        Schema::create("camps", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug")->nullable();
            $table->string("tagline");
            $table->integer("price");
            $table->text("description");
            $table->text("image")->nullable();
            $table->string("status")->default("inactive");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("camps");
    }
};
