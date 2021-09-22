@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => "Bienvenue Mr/me $name",
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <p>Bienvenue au sein de la communauté [Colissend]. Merci d’avoir créé un compte sur notre plateforme. Nous vous souhaitons un agréable moment parmi nous.
        <br> Pour plus d’informations; bien vouloir accéder directement notre page d’accueil en cliquant sur accéder l’accueil.</p>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
        	'title' => "Accéder à l‘accueil",
        	'link' => "$route"
    ])

@stop
