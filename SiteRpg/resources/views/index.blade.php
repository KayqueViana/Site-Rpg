@extends('layouts.main')
@section('title', "A Ordem das Cinzas")
@section('content')


<h1 class="text-center animate__animated animate__fadeIn" id="index-title">A ordem das Cinzas</h1>
<hr height="2px" color="#000000" class="linha-index animate__animated animate__fadeIn">
<h3 class="text-center animate__animated animate__fadeIn" id="index-sub">Um rpg por Kayque Viana</h3>

<div id="params-container" class="col-md-12">
<div  id="cards-container" class="row">
<div class="card col-md-3 animate__animated animate__backInLeft">
    <a href="#">
    <img src="/img/Bad-omem.gif" alt="Fields">
    <p>Login</p></a>
</div>
<div class="card col-md-3 animate__animated animate__backInUp">
    <a href="#">
    <img src="/img/Join-us.gif" alt="Future">
    <p>Minha Ficha</p></a>
</div>
<div class="card col-md-3 animate__animated animate__backInRight">
    <a href="/info">
    <img src="/img/sea.gif" alt="Pillars">
    <p>Instruções</p></a>
</div>
</div>
</div>

<div class="icons">
    <a href="https://www.instagram.com/just_kayque/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
    <ion-icon name="logo-whatsapp"></ion-icon>
</div>

@endsection