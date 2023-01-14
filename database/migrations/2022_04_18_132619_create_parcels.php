<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('address');
            $table->string('number')->nullable();
            $table->string('rname');
            $table->string('raddress');
            $table->string('rcontact');
            $table->string('weight');
            $table->string('height');
            $table->string('length');
            $table->string('width');
            $table->string('price');
            $table->string('status');
            $table->string('vehicle_type');
            $table->string('code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcels');
    }
};
