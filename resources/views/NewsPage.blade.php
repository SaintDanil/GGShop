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
        <div>

        </div>
    </div>
@endsection
