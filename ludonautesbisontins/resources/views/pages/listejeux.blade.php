@extends('layouts.app')
@section('content')
<div class="container">
  <section class="filtre">

    <div class="row">

      <div id="select">

      <div class="col-md-2">
        <p id="donneeselect">Nombre de joueur</p>
        {{ Form::select('nombredejoueurs', ['1', '2', '4','6', '8', '10']) }}
      </div>
      <div class="col-md-2">
        <p id="donneeselect">Âge</p>
        {{ Form::select('age', ['-5ans', '+5ans', '+10ans','+15ans','0 à 99ans']) }}
      </div>
      <div class="col-md-2">
        <p id="donneeselect">Durée</p>
        {{ Form::select('duree', ['-15min', '+15min', '+30min','+45min', '+1h', '+1h30','+2h']) }}
      </div>
      <div class="col-md-3">
        <p id="donneeselect">Possédé par</p>
        {{ Form::select('possedepar', ['truc', 'bidule', 'burger']) }}
      </div>
      <div class="col-md-2">
        <button id="selectok">Lancer la recherche</button>
      </div>
      </div>
  </div>

    <div id="rechercher">
      <input id="recherche" placeholder="Rechercher"></input><button id="ok" type="submit">ok</button>
    </div>

    </section>
    <section class="listedesjeux">

      <div class="row">

        <div class="col-md-4">

          <a href=""><img id="jeu" src="{{asset('images/jeu.jpg')}}"></a>
          <div id="fondjeu"><p id="nomjeu">Nom du jeu</p></div>

        </div>

        <div class="col-md-4">

          <a href=""><img id="jeu" src="{{asset('images/jeu.jpg')}}"></a>
          <div id="fondjeu"><p id="nomjeu">Nom du jeu</p></div>

        </div>

        <div class="col-md-4">

          <a href=""><img id="jeu" src="{{asset('images/jeu.jpg')}}"></a>
          <div id="fondjeu"><p id="nomjeu">Nom du jeu</p></div>

        </div>

        <div class="col-md-4">

          <a href=""><img id="jeu" src="{{asset('images/jeu.jpg')}}"></a>
          <div id="fondjeu"><p id="nomjeu">Nom du jeu</p></div>

        </div>

        <div class="col-md-4">

          <a href=""><img id="jeu" src="{{asset('images/jeu.jpg')}}"></a>
          <div id="fondjeu"><p id="nomjeu">Nom du jeu</p></div>

        </div>

        <div class="col-md-4">

          <a href=""><img id="jeu" src="{{asset('images/jeu.jpg')}}"></a>
          <div id="fondjeu"><p id="nomjeu">Nom du jeu</p></div>

        </div>

      </div>

  </section>

</div>
@endsection
