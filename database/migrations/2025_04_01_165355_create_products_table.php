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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->default('images/default.png')->after('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->after('description');
            $table->date('release_date')->nullable()->after('price');
            $table->integer('total_sales')->default(0)->after('release_date');
            $table->foreignId('prod_category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
