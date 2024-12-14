<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AppController extends Controller
{

    //redirectionnement vers la page acceuil admin
    public function admin(){
        return view('admin/admin');
    }

    //redirectionnement vers la page acceuil apprenant
    public function joueur(){
        return view('joueur/joueur');
    }

    //affichage infos users connectee
    public function __construct()
    {
        if (Auth::check()) {
            view()->share('userInfo', [
                'nom' => Auth::user()->nom,
                'prenom' => Auth::user()->prenom,
                'statut' => Auth::user()->statut,
            ]);
        }
    }
}
