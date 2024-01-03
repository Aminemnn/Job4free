<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('level');
            $table->string('categorie ')->nullable();
            $table->string('sous_categorie ')->nullable();
            $table->string('country')->nullable();
            $table->string('ville')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('codepostal')->nullable();
            $table->string('type')->nullable();
            $table->string('Other')->nullable();
            $table->integer('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('bio')->nullable();
            $table->string('coverture_img')->nullable();
            $table->string('github')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
