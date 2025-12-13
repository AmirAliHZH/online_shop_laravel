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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained("users", "id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("status", 2)->comment("1 = paid 0 = not paid 2 = Unsuccessful payment ");
            $table->unsignedBigInteger("price")->default(0);
            $table->unsignedBigInteger("discount_amount")->default(0);
            $table->timestamps();
        });
        Schema::create('cart_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId("cart_id")->constrained("carts", "id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("product_id")->constrained("products", "id")->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger("number")->default(0);
            $table->unsignedBigInteger("price")->default(0);
            $table->string("off", 3)->default(0)->comment('You can set the value from 0 to 100.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
