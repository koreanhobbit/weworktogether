<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tagline');
            $table->string('branch1')->nullable();
            $table->string('branch2')->nullable();
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->string('phone')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->text('about')->nullable();
            $table->text('privacy_policy')->nullable();
            $table->unsignedInteger('themesetting_id')->default(1);
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
        Schema::dropIfExists('settings');
    }
}
