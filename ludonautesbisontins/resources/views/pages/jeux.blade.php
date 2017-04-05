@extends('layouts.app')
@section('content')
    <div class="container">

      <div class="row">

          <div class="col-md-4">

              <section class="jeu">

                  <img id="apercujeu" src="{{asset('images/limite.png')}}"/>

                    <img id="apercujeu2" src="{{asset('images/limite.png')}}">

                      <img id="apercujeu2" src="{{asset('images/limite.png')}}">

                        <img id="apercujeu2" src="{{asset('images/limite.png')}}">
                        <hr>
                        <button id="jeu">J'ai ce jeu</button>
                        <button id="jeu">Je veux ce jeu</button>
                        <hr>
                        <p id="personnejeu">Personnes qui possèdent le jeu</p>
                        <p id="listpersonnejeu">joueur<br>joueur<br>joueur</p>

                  </section>

              </div>

              <div class="col-md-8">

                <section class="descriptionjeu">

                  <p id="infosjeu">Nombre de joueur : 8</p>

                    <p id="infosjeu">Temps de jeu : 2h</p>

                      <p id="infosjeu">Âge : 12</p>

                        <p id="infosjeu">Conseils : Burger ipsum dolor amet bresaola brisket short rib steak tail beef chuck flank Angus short loin</p>

                </section>

                <section class="commentaire">

                  <p id="comm">Burger ipsum dolor amet bresaola brisket short rib steak tail beef chuck flank Angus short loin</p>

                </section>

              </div>

            </div>
          </div>
      @endsection
