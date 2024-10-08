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
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\employer::class, 'employer_id');
            $table->string('title', 255);
            $table->text('description');
            $table->text('requirements')->nullable();
            $table->string('location', 255);
            $table->decimal('salary')->nullable();
            $table->enum('status', ['open', 'closed', 'pending'])->default('pending');
            $table->timestamp('posted_at');
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
