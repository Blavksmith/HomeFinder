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
    Schema::create('properties', function (Blueprint $table) {
        $table->id(); 

        // Relasi ke user
        $table->foreignId('user_id')->constrained()->onDelete('cascade');

        // data utama
        $table->string('photo')->nullable();             
        $table->string('title');                         
        $table->text('summary');                           
        $table->decimal('price', 12, 2);                   
        $table->string('city');
        $table->string('state')->nullable();
        $table->string('country');

        // spesifikasi properti
        $table->integer('bed_room');
        $table->integer('bath_room');
        $table->integer('area_l')->nullable();             
        $table->integer('area_w')->nullable();              
        $table->integer('area_total')->nullable();          

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
