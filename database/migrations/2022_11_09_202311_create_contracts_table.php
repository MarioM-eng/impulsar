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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('contract_num');
            $table->date('start');
            $table->date('expitation')->nullable(true);
            $table->date('retirement')->nullable(true);
            $table->binary('status');
            $table->string('position');
            $table->foreignId('contract_type_id')->constrained();
            $table->foreignId('business_id')->constrained();
            $table->foreignId('employee_id')->constrained();
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
        Schema::dropIfExists('contracts');
    }
};
