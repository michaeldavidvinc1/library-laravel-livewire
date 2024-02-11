<?php

use App\Models\Book;
use App\Models\User;
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
        Schema::create('book_items', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Book::class, 'book_id');
            $table->foreignIdFor(User::class, 'user_id')->nullable();
            $table->enum('status', array('AVAILABLE', 'NONAVAILABLE', 'BROKEN'))->default('AVAILABLE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_items');
    }
};
