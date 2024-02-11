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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('title_en')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('title_fr')->nullable();
            $table->string('slug_fr')->nullable();
            $table->string('title_de')->nullable();
            $table->string('slug_de')->nullable();
            $table->string('thumbnail');
            $table->string('thumbnail_en')->nullable();
            $table->string('thumbnail_fr')->nullable();
            $table->string('thumbnail_de')->nullable();
            $table->text('content');
            $table->text('content_en')->nullable();
            $table->text('content_fr')->nullable();
            $table->text('content_de')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')
                ->on('categories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('is_published')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
