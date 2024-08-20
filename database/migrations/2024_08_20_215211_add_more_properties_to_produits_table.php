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
        Schema::table('produits', function (Blueprint $table) {
            $table->integer('min_quantite')->after('stock')->default(1);
            $table->boolean('is_active')->after('stock')->default(true);
            $table->boolean('is_new')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('in_stock')->default(true);
            $table->boolean('is_solde')->default(true);



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produits', function (Blueprint $table) {
            $table->dropColumn(['min_quantite','is_active','is_new','is_featured','in_stock','is_solde']);
        });
    }
};
