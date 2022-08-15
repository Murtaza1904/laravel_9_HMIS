<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('patient_ids', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('patient_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patient_ids');
    }
};
