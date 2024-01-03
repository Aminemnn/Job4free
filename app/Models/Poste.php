<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'category',
        'sous_category',
        'image',
        'price',
        'description',
        'user_id',
        'name_user',
        'img_user',
        'bio_user'

    ];
}
