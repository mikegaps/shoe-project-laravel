<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('size');
            $table->string('color');
            $table->enum('condition', ['new', 'used']);
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->enum('status', ['available', 'sold', 'pending'])->default('available');
            $table->string('image_url')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('buyer_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shoes');
    }
};

