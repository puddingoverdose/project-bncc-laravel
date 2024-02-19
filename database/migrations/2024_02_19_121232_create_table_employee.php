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
        Schema::create('table_employee', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->integer("umur");
            $table->string("alamat");
            $table->string("no-hp");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_employee');
    }
};