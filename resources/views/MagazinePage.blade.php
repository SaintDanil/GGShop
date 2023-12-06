@extends('layouts.main')
@section('content')
    <body id="body">
    <div id="navigate" class="menu">
        <div class="button">
            <nav id="main-nav">
                <a href="index.php" id="MainButton" class="item">Главная</a>
                <a href="index.php" id="NewsButton" class="item">Магазин</a>
            </nav>
            <div class="profile">
                <a href="index.php" class="item">
                    <div class="nickname">
                        <strong class="nickname">SaintDanil</strong>
                    </div>
                    <div>
                        <img class="avatar" width="50" height="50" src="image/zerotwo.jpg">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="general">
        <header class="HeaderItem">
            <h1>Игровые новости</h1>
        </header>
        <div class="listgame">
            @foreach($games as $game)
                <div class="gamecard">
                    <div class="card-image">
                        <img src="http://127.0.0.1:8000/storage/{{$game->picture}}">
                    </div>
                    <div class="card-body">
                        <p class="name">{{$game->name}}</p>
                        <div class="discription">
                            <p>{{$game->description}}</p>
                        </div>
                        <div class="price">
                            <p>{{$game->price}} руб</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
