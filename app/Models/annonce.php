<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonce extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'catgorie',
      'sous_categorie',
      'price_categorie',
      'price',
      'type_price',
      'semaine',
      'date',
      'description',
        'nombre_proposition',
        'propostion',
      'id_user',
      'name_user',
        'img_user',
        'views'
    ];
}
