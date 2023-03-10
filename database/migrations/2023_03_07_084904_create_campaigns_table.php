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
            $table->string('title');
            $table->string('phone_number');
            $table->string('forward_to');                      
            $table->unsignedInteger('total_calls')->default(0);
            $table->unsignedInteger('total_leads')->default(0);
            $table->unsignedInteger('con_leads')->default(0); //Convereted Leads
            $table->float('conversion')->default(0);
            ///////
            $table->unsignedInteger('category');
            $table->boolean('record')->default(0);
            $table->boolean('record_msg')->default(0);
            $table->boolean('create_leads')->default(0);
            $table->string('email_noti')->default("");
            $table->boolean('whisper_msg')->default(0);
            $table->unsignedInteger('ad_cost')->default(0);
            $table->datetime('created_at')->default(null);
            $table->datetime('updated_at')->default(null);
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
