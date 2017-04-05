<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="{{asset('css/accueil.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/header.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Macondo|Open+Sans" rel="stylesheet">

    </head>

    <body>

      <header>
        @include('pages.header')

      </header>

      <main>

        <div class="container">
          <div class="row">
            <div class="col-md-3">

              <article class="article">

                    <h2>• Derniers sujets sur le forum •</h2>

                    <hr>

                      <p id="titrearticle"></p>

                        <p id="apercuarticle"></p>

                          <a href="" id="voirplus">Voir plus</a>


                </article>


                <article class="recherche">

                  <h2>• Nous recherchons •</h2>

                  <hr>

                    <p id="recherche"></p>
                      <p id="recherche"></p>
                        <p id="recherche"></p>

                          <a href="" id="voirplus">Voir plus</a>

                </article>

            </div>
            <div class="col-md-7">

                <article class="sujet">

                      <h2>• Sujet à la une •</h2>

                        <p id="apercusujet"></p>

                          <a href="" id="voirplus">Voir plus</a>

                            <img src="{{asset('images/.png')}}"/>


                </article>


                <article class="evenement">

                    <h2><img src="{{asset('images/.png')}}">• Évenement •<img src="../../images"></h2>

                    <hr>

                      <p id="evenement"></p>

                </article>

          </div>
          <div class="col-md-2">


          <article class="calendrier">

              <p id="descriptionevenement"></p>

          </article>


          <article class="coupdecoeur">

              <h2>• Coup de coeur •</h2>

              <hr>

                <p id="titrejeu"></p>

                  <img src="{{asset('images/.png')}}">

                    <p id="apercujeu"></p>

                      <a href="" id="voirplus"></a>

          </article>

        </div>
      </div>


          <article class="actu">

              <h2>• Dernières actus •</h2>

              <hr>

                <div class="row">

                    <div class="col-md-3">

                        <img src="{{asset('images/.png')}}">

                          <p id="autreactu"></p>

                    </div>

                    <div class="col-md-1">

                      <img src="{{asset('images/.png')}}">

                    </div>

                    <div class="col-md-4">

                      <img src="{{asset('images/.png')}}">

                        <p id="apercuactu"></p>

                    </div>

                    <div class="col-md-1">

                      <img src="{{asset('images/.png')}}">

                    </div>

                    <div class="col-md-3">

                        <img src="{{asset('images/.png')}}">

                          <p id="autreactu"></p>

                    </div>

                  </div>

                  <a href="" id="voirplus">Voir plus</a>

          </article>

      </main>



    </body>



</html>
