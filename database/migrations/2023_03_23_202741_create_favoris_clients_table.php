<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavorisClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoris_clients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_poste');
            $table->string('title');
            $table->string('category');
            $table->string('sous_category');
            $table->string('image');
            $table->string('price');
            $table->string('description');
            $table->integer('user_id');
            $table->bigInteger('id_destinateur ');
            $table->string('name_user');
            $table->string('img_user');
            $table->string('etat');
            $table->string('name_freelancer');
            $table->string('img_freelancer');
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
        Schema::dropIfExists('favoris_clients');
    }
}
