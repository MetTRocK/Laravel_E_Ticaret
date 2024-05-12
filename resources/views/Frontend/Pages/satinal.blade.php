@extends('Frontend.Layout.layout')
@section('content')
<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{route('anasayfa')}}">Anasayfa</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Teşekkürler</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <span class="icon-check_circle display-3 text-success"></span>
          <h2 class="display-3 text-black">Teşekkürler!</h2>
          <p class="lead mb-5">Satınalma işlemin başarılı tamamlandı.</p>
          <p><a href="{{route('urunler')}}" class="btn btn-sm btn-primary">Alışverişe devam et</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection
