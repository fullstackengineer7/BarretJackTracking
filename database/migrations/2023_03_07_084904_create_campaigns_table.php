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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->string('fowardto');
            $table->unsignedInteger('total_calls')->default(0);
            $table->unsignedInteger('total_leads')->default(0);
            $table->unsignedInteger('con_leads')->default(0); //Convereted Leads
            $table->float('conversion')->default(0);
            $table->datetime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
};
