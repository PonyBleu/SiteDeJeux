@extends('layouts.app')
@section('content')
        <div class="container">

          <div class="row">
            <div class="col-xs-12 col-md-3">

              <article class="article">

                    <h2>• Derniers sujets sur le forum •</h2>
                    <hr>
                      <p id="titrearticle">Titre exemple</p>
                        <p id="apercuarticle">Burger ipsum dolor amet bresaola brisket short rib steak tail beef chuck flank Angus short loin kobe tri-tip rump bacon strip steak tenderloin. Shoulder kobe t-bone, Hamburger beef bresaola tri-tip cow. Bresaola flank short loin beef ribs.</p>
                          <a href="" id="voirplus">Voir plus</a>

                </article>


                <article class="recherche">

                  <h2>• Nous recherchons •</h2>
                  <hr>
                    <p id="recherche">15 joueurs pour blablabla</p>
                      <p id="recherche">8 joueurs pour blablabla</p>
                        <p id="recherche">2 joueurs pour blablabla</p>
                          <a href="" id="voirplus">Voir plus</a>

                </article>

            </div>
            <div class="col-xs-12 col-md-7">

                <article class="sujet">

                      <h2>• Sujet à la une •</h2>
                      <hr>
                        <p id="apercusujet">Burger ipsum dolor amet bresaola brisket<a href="" id="voirplus">Voir plus</a></p>

                            <img id="taverne" src="{{asset('images/taverne.jpg')}}"/>

                </article>


                <article class="evenement">

                    <h2><img id="drapeau" src="{{asset('images/drapeau.png')}}">• Évenement •<img id="drapeau" src="images/drapeau.png"></h2>
                    <hr>
                      <p id="evenement">Burger ipsum dolor amet bresaola brisket short rib steak tail beef chuck flank Angus short loin kobe tri-tip rump bacon strip steak tenderloin. Shoulder kobe t-bone, Hamburger beef bresaola tri-tip cow. Bresaola flank short loin beef ribs. Tri-tip filet mignon cow short rib patties rump. Strip steak rump patties Hamburger flank corned beef ground round bresaola shank tenderloin. Burger shank t-bone meatloaf short rib. Short rib Burger ground round Angus bresaola spare ribs brisket beef.</p>
                </article>

          </div>
          <div class="col-xs-12 col-md-2">


          <article class="calendrier">
              <img id="calendrier" src="{{asset('images/calendrier.jpg')}}">
              <p id="descriptionevenement">Description de l'évenement</p>

          </article>


          <article class="coupdecoeur">
          <img id="coeur" src="{{asset('images/coeur.png')}}">
              <h2>• Coup de coeur •</h2>
              <hr>
                <p id="titrejeu"></p>
                  <img id="jeu" src="{{asset('images/limite.png')}}">
                    <p id="apercujeu">Burger ipsum dolor amet bresaola brisket short rib steak tail beef chuck flank</p>
                      <a href="" id="voirplus">Voir plus</a>

          </article>

        </div>
      </div>


          <article class="actu">

              <h2>• Dernières actus •</h2>
              <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <img id="actu2" src="{{asset('images/actu.jpg')}}">
                          <p id="autreactu">Autre actu</p>

                    </div>

                    <div class="col-xs-12 col-md-1">
                      <img id="epee" src="{{asset('images/epee.png')}}">
                    </div>

                    <div class="col-xs-12 col-md-4">
                      <img id="actu1" src="{{asset('images/actu.jpg')}}">
                        <p id="apercuactu">Burger ipsum dolor amet bresaola brisket</p>

                    </div>

                    <div class="col-xs-12 col-md-1">
                      <img id="epee" src="{{asset('images/epee.png')}}">
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <img id="actu2" src="{{asset('images/actu.jpg')}}">
                          <p id="autreactu">Autre actu</p>

                    </div>

                  </div>

                  <a href="" id="voirplus">Voir plus d'actualités</a>

          </article>

    @endsection
