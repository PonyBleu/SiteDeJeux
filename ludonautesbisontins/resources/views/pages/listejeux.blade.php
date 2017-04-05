@extends('layouts.app')
@section('content')
<div class="container">
  <section class="filtre">

    <div class="row">

      <nav>
          <ul>
              <div class="col-md-3">
                  <li><select>Nombre de joueur</select>
                  <option>truc</option>
                  <option>truc</option></li>
                </div>

              <div class="col-md-3">
                  <li><select>Âge</select>
                  <option>truc</option>
                  <option>truc</option></li>
              </div>

              <div class="col-md-3">
                  <li><select>Durée</select>
                  <option>truc</option>
                  <option>truc</option></li>
              </div>

              <div class="col-md-3">
                  <li><select>Possédé par</select>
                  <option>truc</option>
                  <option>truc</option></li>
              </div>

          </ul>
      </nav>

    </div>

      <input id="recherche" placeholder="Rechercher"></input><button type="submit">OK</button>

    </section>
    <section class="listedesjeux">

      <div class="row">

        <div class="col-md-4">

          <img src="{{asset('images/logo.png')}}">

        </div>

        <div class="col-md-4">

          <img src="{{asset('images/logo.png')}}">

        </div>

        <div class="col-md-4">

          <img src="{{asset('images/logo.png')}}">

        </div>

      </div>

  </section>

</div>
@endsection
