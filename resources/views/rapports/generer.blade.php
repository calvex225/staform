<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("assets/images/favicon.png") }}">

    <title>{{ config('app.name', 'STA Form') }}</title>
    
</head>
<body>
    <h1>{{ $maintenance->nom }}</h1>
    <h3>Nom du Site : {{ $maintenance->site->nom }}</h3>
    @foreach ($maintenance->taches()->get() as $tache)
        <p>
        Tache: {{ $tache->nom }}<br>
        Description: {{ $tache->description }}<br>
        Date de debut: {{ $tache->date_debut }}<br>
        Date de fin: {{ $tache->date_fin }}
        </p>
        <br>
            <h4>Avant le travail</h4>
            @foreach ($tache->photos()->where('etat','=','Avant')->get() as $photo)
                <p>
                <img src="{{ asset('storage/'.$photo->image) }}" style="height:400px; width:auto">
                <br>
                Commentaire: {{ $photo->commentaire }}
                </p>
            @endforeach
            <br>
            <h4>Apres le travail</h4>
            @foreach ($tache->photos()->where('etat','=','Apres')->get() as $photo)
                <p>
                <img src="{{ asset('storage/'.$photo->image) }}" style="height:400px; width:auto">
                <br>
                Commentaire: {{ $photo->commentaire }}
                </p>
            @endforeach
    @endforeach
</body>
</html>