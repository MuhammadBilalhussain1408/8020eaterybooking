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
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('selectedDate')->nullable(); 
            $table->string('selectedTime')->nullable(); 
            $table->string('status')->nullable(); 
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('selectedDate');
            $table->dropColumn('selectedTime');
            $table->dropColumn('status');
        });
    }
};
