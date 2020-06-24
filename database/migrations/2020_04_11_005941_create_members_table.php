<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('full_name');
            $table->string('gender');
            $table->string('birthday');
            $table->integer('phone')->nullable();
            $table->integer('plan_id')->nullable();
            $table->integer('trainer_id')->nullable();
            $table->integer('card_id')->nullable();
            $table->string('image')->nullable();       
            $table->integer('status')->nullable();
            $table->rememberToken();
            $table->timestamps(); 
//            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('users');            
        });
    }

  public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
