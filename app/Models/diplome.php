<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diplome extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'institut',
        'titre_diplome',
        'annee',
        'id_user'
        ];
}
