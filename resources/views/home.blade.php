@extends('layouts.app')

@section('content')
<!--
    <div class="containter">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header"> {{ __('Dasboard')}} </div>
                    <div class="card-body">
                        @if (session('session_status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                        @endif
                        {{ __('Bienvenue vous êtes bien connecté')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Bienvenue</h1> <h4>{{ Auth::user()->name }}</h4>
  </div>
</div>
<div class="container">

@if(session('status'))
        <div class="alert alert-success" role="alert">
        {{session('status')}}
        </div>
@endif

    <section id="featured" class="featured2">
      <div class="container text-center">

        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class='bx bx-add-to-queue'></i>
              <h3><a href=" {{route('posts.create')}} ">Ajouter un article</a></h3>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class='bx bx-list-ul' ></i>
              <h3><a href="{{url('posts')}}">Liste des articles</a></h3>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class='bx bx-home' ></i>
              <h3><a href="/">Acceuil</a></h3>
            </div>
          </div>
        </div>

      </div>
   
      <div class="text-center mt-5">
        <a type="button" href="{{ route('logout') }}" class="btn btn-outline-primary"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Deconnection') }}</a>
      </div>
     
    </section><!-- End Featured Section -->


</div>

@endsection
