<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebDataTable extends Migration
{
        public function up()
    {
        Schema::create('web_data', function (Blueprint $table) {
            $table->id();
            $table->string('facebook');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('site_phone');
            $table->string('site_url');
            $table->string('email');
            $table->string('site_name');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_data');
    }
}
