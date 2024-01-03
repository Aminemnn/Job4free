<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contrat extends Model
{
    use HasFactory;

    protected $fillable=[
      'adresse_client',
      'code_postal_client',
      'email_client',
      'web_site_client',
      'num_facture',
      'date',
      'payement_status',
      'total_amount',
        'id_client',
      'name_client',
      'country_client',
        'ville_client',
        'phone_client',
        'legal',
        'id_freelancer',
        'name_freelancer',
        'adresse_freelancer',
        'country_freelancer',
        'ville_freelancer',
        'phone_freelancer',
        'currency',
        'title_projet',
        'categorie',
        'sous_categorie',
        'price_categorie',
        'price',
        'type_price',
        'semaine',
        'data',
        'payment_details',
        'card_holder_name',
        'number_card',
        'cancel'
    ];
}
