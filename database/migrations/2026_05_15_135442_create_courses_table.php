<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('bg_color')->default('#0b1f3a');
            $table->decimal('price', 10, 2)->default(0.00);
            $table->decimal('old_price', 10, 2)->nullable();
            $table->boolean('is_free')->default(false);
            $table->integer('modules_count')->default(0);
            $table->integer('lessons_count')->default(0);
            $table->decimal('rating', 3, 2)->default(0.00);
            $table->integer('students_count')->default(0);
            $table->enum('status', ['draft', 'pending', 'published'])->default('draft');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
