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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('cc')->unique();
            $table->string('names');
            $table->string('last_names');
            $table->date('date_of_birth');
            $table->char('sex');
            $table->string('cellphone')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('email')->unique()->nullable(true);
            $table->string('blood_type');
            $table->integer('department');
            $table->integer('city');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
