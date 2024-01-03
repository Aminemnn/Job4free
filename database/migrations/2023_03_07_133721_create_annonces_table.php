<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('catgorie')->nullable();
            $table->string('sous_categorie')->nullable();
            $table->string('price_categorie')->nullable();
            $table->integer('price')->nullable();
            $table->string('type_price')->nullable();
            $table->string('semaine')->nullable();
            $table->date('date')->nullable();
            $table->string('description')->nullable();
            $table->integer('nombre_proposition');
            $table->integer('propostion');
            $table->bigInteger('id_user');
            $table->string('name_user');
            $table->string('img_user');
            $table->bigInteger('views');
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
        Schema::dropIfExists('annonces');
    }
}
