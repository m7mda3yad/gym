<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
             $table->string('full_name');
            $table->string('birthday');
            $table->integer('phone')->nullable();
            $table->integer('plan_id')->nullable();
            $table->integer('shift')->nullable();
             $table->string('image')->nullable();
             $table->integer('status')->nullable();
            $table->integer('ip')->nullable();
            $table->rememberToken();
            $table->timestamps(); 
//           $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('users');            
        });
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }    

    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}