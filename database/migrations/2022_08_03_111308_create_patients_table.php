<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('marital_status');
            $table->bigInteger('national_id');
            $table->bigInteger('social_security_number');
            $table->bigInteger('external_id');
            $table->text('user_defined');
            $table->text('billing_note');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
