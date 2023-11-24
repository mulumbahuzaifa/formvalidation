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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name');
            $table->string('id_number');
            $table->string('date_of_birth');
            $table->string('partner_name');
            $table->string('partner_first_name');
            $table->string('partner_id');
            $table->string('partner_dob');
            $table->string('po_box');
            $table->string('street');
            $table->string('area_name');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('phone2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
