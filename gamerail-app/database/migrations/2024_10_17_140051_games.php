<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->float('price');
            $table->string('developer', 100);
            $table->string('publisher', 100);
            $table->text('description');
            $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
