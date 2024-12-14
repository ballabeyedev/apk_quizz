<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/auth/ins.css')}}">
    <style>
    .h3 {
        text-decoration: underline;
        margin-left: 450px;
        margin-top: -10px;
    }
    </style>
</head>

<body>
    <hr class="hr">
    <h3 class="h3">S'INSCRIRE COMME UTILISATEUR </h3>
    <form class="login" action="{{ route('auth.store1') }}" method="POST">

        <a href="javascript:history.go(-1)" class="retour">RETOUR</a><br><br>
        @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom">NOM</label>
                    <input type="text" name="nom" class="@error('nom') is-invalid @enderror form-control" id="nom" placeholder="Nom" value="{{ old('nom') }}">
                    @error('nom')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="prenom">PRENOM</label>
                    <input type="text" name="prenom" class="@error('prenom') is-invalid @enderror form-control" id="prenom" placeholder="Prénom" value="{{ old('prenom') }}">
                    @error('prenom')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="login">IDENTIFIANT</label>
                    <input type="text" name="login" class="@error('login') is-invalid @enderror form-control" id="login" placeholder="Identifiant" value="{{ old('login') }}">
                    @error('login')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="passwd">PASSWORD</label>
                    <input type="password" name="passwd" class="@error('passwd') is-invalid @enderror form-control" id="passwd" placeholder="Password">
                    @error('passwd')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="telephone">TELEPHONE</label>
                    <input type="text" name="telephone" class="@error('telephone') is-invalid @enderror form-control" id="telephone" placeholder="Téléphone" value="{{ old('telephone') }}">
                    @error('telephone')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div id="error-message"></div>
            </div>
            <button type="submit" class="btn btn-primary">INSCRIPTION</button>
        </form>

        <script src="{{ asset('js/ins.js') }}"></script>
</body>
</html>
