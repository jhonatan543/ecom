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
                        <h2>Sobre Nostros</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Home</a>
                            <span>Sobre Nostros</span>
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
                    <div class="col-lg-12">
                    <H4>
                    SOBRE ACOMSIV</H4>
                    <br>
                    <p>
LA EMPRESA SE ENCUENTRA BAJO EL DOMINIO DE LA ASOCIACIÓN DE COMERCIANTES DEL MERCADO DE SANTA ISABEL DE VILLA, CUYA SIGLA ES “ACOMSIV” FUNDADO EL 08-11-1997 INSCRITO EN EL REGISTRO PÚBLICO EL 11-12-1997, CON PERSONERÍA JURÍDICA N° 11024728 DE DERECHO PRIVADO SIN FINES DE LUCRO. EL MERCADO COMENZÓ CON 15 TIENDAS QUE AL PASAR EL TIEMPO FUERON AUMENTANDO POCO A POCO.
NOS UBICAMOS EN LA AV.VISTA ALEGRE SANTA ISABEL DE VILLA, SURCO LIMA - LIMA - PERU , COMUNICATE AL TELEFONO +51 940433974</p>
                    </div>
                </div>
        </div>
    </section>

@endsection
