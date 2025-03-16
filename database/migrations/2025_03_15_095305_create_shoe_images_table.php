<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('shoe_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shoe_id');
            $table->string('image_url');
            $table->timestamps();

            // Foreign Key
            $table->foreign('shoe_id')->references('id')->on('shoes')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shoe_images');
    }
};
