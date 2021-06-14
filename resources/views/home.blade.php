@extends('layouts.fontend-master')
@section('content')

  <!-- Hero Section Begin -->
  <section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Categorias</span>
                    </div>
                    @php
                    $categoriess = App\Category::where('status',1)->latest()->get();
                 @endphp
                    <ul>
                        @foreach ($categoriess as $row)
                        <li><a href="{{ url('category/product-show/'.$row->id) }}">{{ $row->category_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+51 940433974</h5>
                                <span>Atendemos 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('fontend') }}/img/carrito.PNG">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Mi Perfil</h2>
                    <div class="breadcrumb__option">
                        <a href="{{url('/home')}}">Home</a>
                        <span>Mi Perfil</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Breadcrumb Section End -->
<section class="shoping-cart spad">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            @include('pages.profile.inc.sidebar')

        </div>
        <div class="col-sm-8">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('update.user1') }}" method="POST">
              @csrf
              <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ Auth::user()->name }}">
                  @error('name')
                 <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="exmEmail">Correo Electronico</label>
                    <input type="email" class="form-control" id="exmEmail" aria-describedby="emailHelp" name="email" placeholder="Correo Electronico" value="{{ Auth::user()->email }}">
                    @error('email')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                  </div>
                  <div class="form-group">
                    <label for="exmEmail">Contraseña</label>
                    <input type="password" class="form-control" id="exmEmail" aria-describedby="emailHelp" name="password" placeholder="Correo Electronico" value="{{ Auth::user()->password }}">
                    @error('password')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                  </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
</section>
@endsection
