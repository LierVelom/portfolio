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
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('portfolio_id')->nullable(); // ID của portfolio liên quan (nếu có)
            $table->string('action'); // Hành động: created, updated, deleted
            $table->string('model_type'); // Tên model liên quan (Resource, Item, Portfolio,...)
            $table->unsignedBigInteger('model_id'); // ID của model đó
            $table->text('changes')->nullable(); // Dữ liệu thay đổi (nếu có)
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
