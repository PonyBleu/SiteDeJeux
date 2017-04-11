@extends('layouts.app')
@section('content')
<article class="bginscription">
  <div class="container">
    <div class="row">
      <div class="text-center">

          <form id="form_inscription" class="form_inscription" action="" method="post">
            <div class="inscription col-sm-12 col-md-12 col-md-offset-2">
              <div class="">
                <h2 class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">• Inscription •</h2>
                <img id ="guerrier" class ="col-md-0 col-md-offset-2 col-lg-0 col-lg-offset-2" src="{{asset('images/warrior.png')}}" alt="guerrier,warrior">
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" placeholder="Nom" class="text-center">
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12">
                <input  type="text" placeholder="Prénom" class="text-center">
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12">
                <input  type="text" placeholder="Pseudo" class="text-center">
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12">
                <input  type="text" placeholder="E-Mail" class="text-center">
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12">
                <input  type="password" placeholder="Mot de passe" class="text-center">
              </div>
              <div class="col-sm-12 col-md-12 col-lg-12">
                <input  type="password" placeholder="Confirmation de mot de passe" class="text-center">
              </div>
              <div class="col-sm-3 col-md-3 col-lg-3">
                <img src="{{asset('images/hc.png')}}" alt="caverne,homme,cave">
              </div>
              <div class="col-sm-3 col-sm-offset-6 col-md-3 col-lg-3">
                <button type="button" name="button">Envoyer</button>
              </div>


            </div>

          </form>

      </div>
    </div>
  </div>
</article>
@endsection
