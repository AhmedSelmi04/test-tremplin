<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'civilite',
        'nom',
        'prenom',
        'email',
        'telephone',
        'message',
        'types_visite',
        'disponibilites'
    ];

    protected $casts = [
        'types_visite' => 'array',
        'disponibilites' => 'array'
    ];
}