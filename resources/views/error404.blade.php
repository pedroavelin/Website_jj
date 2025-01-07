@extends('layouts.main_layout')
@section('content')
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Início</a><span>&raquo;</span></li>
            <li><strong>Erro 404 </strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!--Container -->
  <div class="error-page">
    <div class="container">
      <div class="error_pagenotfound"> <strong>4<span id="animate-arrow">0</span>4 </strong> <br />
        <b>Oops... Pagina não encontrada</b> <em>Desculpe, a página não foi encontrada aqui.</em>
        <p>Tente usar o botão abaixo para ir para a página principal do site</p>
        <br />
        <a href="{{ url('/') }}" class="button-back"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp;Ir para início</a> </div>
      <!-- end error page notfound --> 
      
    </div>
  </div>
  <!-- Container End -->

@endsection