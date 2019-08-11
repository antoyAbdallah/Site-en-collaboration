<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Votre profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bravo, vous êtes connecté. Bonne visite!
                </div>
            </div>
        </div>
    </div>
</div>
<div id="frontiere"></div>

<!--
<div id="notif">
    
    <p id="reponses"><spna class="num">12</spna> réponses</p> 
    <p><span style="" class="num">40</span>Abonnés</p>
    <div style="float: right; text-align: right; padding-right: 20px;">
        <p>
            <ul>
                <a href="#"><li>Articles récents</li></a>
                <a href="#"><li>Articles suivis</li></a>
                <a href="#"><li>Les plus commentés</li></a>
                <a href="#"><li>Cours commencés</li></a>
        
    </ul></p></div>
</div> -->
<hr>
@endsection
    
</body>
</html>































