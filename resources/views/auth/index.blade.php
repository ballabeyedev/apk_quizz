<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Quiz App</title>
    <link rel="stylesheet" href="{{asset('css/auth/index.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- Lien vers le fichier JavaScript -->
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>AUTHENTIFICATION</h1>
            <form action="{{ route('auth.handlogin') }}" method="POST" id="myForm">
                @csrf
                <div class="textbox">
                    <input type="text" placeholder="Identifiant" name="login" id="login" required>
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Mot de passe" name="password" id="password" required>
                </div>
                @if (Session::get('error_msg'))
                    <div class="alert alert-danger">
                        <b style="font-size:15px; color: red;">{{ Session::get('error_msg') }}</b>
                    </div>
                @endif
                <div class="error-message" id="error-message"><?= isset($error) ? $error : "" ?></div><br>
                <button type="submit" class="btn">Se connecter</button>
                <p class="register-link">Pas encore de compte ? <a href="{{ route('auth.inscription') }}">Inscrivez-vous ici</a></p>
            </form>
        </div>
    </div>
</body>
</html>
