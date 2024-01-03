<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->string('adresse_client');
            $table->integer('code_postal_client');
            $table->string('email_client');
            $table->string('web_site_client')->nullable();
            $table->integer('num_facture');
            $table->date('date');
            $table->string('payement_status');
            $table->integer('total_amount');
            $table->bigInteger('id_client');
            $table->string('name_client');
            $table->string('country_client');
            $table->string('ville_client');
            $table->integer('phone_client');
            $table->integer('legal');
            $table->bigInteger('id_freelancer');
            $table->string('name_freelancer');
            $table->string('adresse_freelancer');
            $table->string('country_freelancer');
            $table->string('ville_freelancer');
            $table->integer('phone_freelancer');
            $table->string('currency');
            $table->string('title_projet');
            $table->string('categorie');
            $table->string('sous_categorie');
            $table->string('price_categorie');
            $table->integer('price');
            $table->string('type_price');
            $table->integer('semaine')->nullable();
            $table->date('data')->nullable();
            $table->string('payment_details');
            $table->string('card_holder_name');
            $table->integer('number_card');
            $table->string('cancel');
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
        Schema::dropIfExists('contrats');
    }
}
