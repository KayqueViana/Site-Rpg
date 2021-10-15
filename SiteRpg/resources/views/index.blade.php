@extends('layouts.main')
@section('title', "A Ordem das Cinzas")
@section('content')


<h1 class="text-center" id="index-title">A ordem das Cinzas</h1>
<hr width="50%" height="2px" color="#000000" class="linha-index">
<h3 class="text-center" id="index-sub">Um rpg por Kayque Viana</h3>

<div class="cards-control row">
<div class="card col-md-3">
    <a href="#">
    <img src="/img/Bad-omem.gif" alt="Fields">
     Login</a>
</div>
<div class="card col-md-3">
    <a href="#">
    <img src="/img/Join-us.gif" alt="Future">
    Cadastrar</a>
</div>
<div class="card col-md-3">
    <a href="/info">
    <img src="/img/Pillars.gif" alt="Pillars">
    Instruções</a>
</div>
</div>

<div class="icons">
    <a href="https://www.instagram.com/just_kayque/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
    <ion-icon name="logo-whatsapp"></ion-icon>
</div>

@endsection