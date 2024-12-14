<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Authenticatable
{
    use Notifiable;

    protected $table = 'utilisateurs_apk';

    public $timestamps = false;

    protected $fillable = [
        'prenom',
        'nom',
        'login',
        'password',
        'telephone',
        'statut',
    ];

    protected $hidden = [
        'passwd', // Assurez-vous que cela correspond bien
    ];


}
