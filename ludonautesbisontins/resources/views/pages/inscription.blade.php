@extends('layouts.app')
@section('content')
<article class="bginscription">
  <div class="container">
    <div class="row">
      <div class="text-center">

          <form id="form_inscription" class="form_inscription" action="" method="post">
            <div class="inscription col-sm-12 col-md-12 col-md-offset-2">
                <h2 class="text-center">• Inscription •</h2>
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
              <div class="col-sm-3 col-sm-offset-9 col-md-3 col-lg-3">
                <button type="button" name="button">Envoyer</button>
              </div>
            </div>

          </form>

      </div>
    </div>
  </div>
</article>
@endsection
