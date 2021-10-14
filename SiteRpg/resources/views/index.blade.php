@extends('layouts.main')
@section('title', "ODC")
@section('content')


<h1 class="text-center" id="index-title">A ordem das Cinzas</h1>
<hr width="50%" height="2px" color="#000000" class="linha-index">
<h3 class="text-center" id="index-sub">Um rpg por Kayque Viana</h3>

<div class="cards-control">
<div class="card">
    <a href="#">
    <img src="/img/Begin.jpg" alt="Ambient">
     Login</a>
</div>
<div class="card">
    <a href="#">
    <img src="/img/New.jpg" alt="Shipwreck">
    Cadastrar</a>
</div>
<div class="card">
    <a href="/info">
    <img src="/img/Info.jpg" alt="Skull">
    Instruções</a>
</div>
</div>

<div class="icons">
    <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
    <ion-icon name="logo-whatsapp"></ion-icon>

</div>

<div class="test">
    <p>Login</p>
    <p>Cadastrar</p>
    <p>Instruções</p>
</div>
@endsection