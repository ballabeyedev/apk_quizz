<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Utilisateur;

class AuthController extends Controller
{
    //page de connexion
    public function index()
    {
        return view('auth.index');
    }

    //methode pour se deconnecter
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirection après déconnexion
    }

    // Méthode pour gérer la redirection après la connexion
    public function handlogin(AuthRequest $request)
    {
        $credentials = $request->only('login', 'password');

        if (Auth::guard('utilisateurs_apk')->attempt($credentials)) {
            $user = Auth::guard('utilisateurs_apk')->user();

            if ($user->statut == 'admin') {
                return redirect()->route('admin');
            } elseif ($user->statut == 'joueur') {
                return redirect()->route('joueur');
            } else {
                return redirect()->back()->with('error_msg', 'Rôle utilisateur non reconnu');
            }
        } else {
            return redirect()->back()->with('error_msg', 'Paramètres de connexion non reconnus');
        }
    }


    //methode pour s'inscrire
    public function inscription(){
        return view('auth.inscription');
    }

    //methode pour enregistrer les changement
    public function store1(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'login' => 'required|max:30',
            'password' => 'required',
            'telephone' => 'required|min:9',
        ]);

        // Création de l'utilisateur
        Utilisateur::create([
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'login' => $validated['login'],
            'password' => bcrypt($validated['passwd']), // Hashage du mot de passe
            'telephone' => $validated['telephone'],
        ]);

        // Redirection après la création
        return redirect('/');
    }
}
