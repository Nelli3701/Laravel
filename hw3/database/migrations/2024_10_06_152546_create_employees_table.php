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
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Поле для первичного ключа
            $table->string('name');       // Поле для имени
            $table->string('surname');    // Поле для фамилии
            $table->string('email')->unique(); // Поле для email с уникальным значением
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees'); // Удаляет таблицу если она существует
    }
};
