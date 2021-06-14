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
                        <h2>Misión y Visión</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Home</a>
                            <span>Misión y Visión</span>
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
                    MISIÓN</H4>
                    <br>
                    <p>
                    SOMOS UNA EMPRESA QUE ESTÁ ORIENTADA A OFRECER UNA VARIEDAD DE PRODUCTOS Y SERVICIOS EN TODO EL PUEBLO DE SANTA ISABEL DE VILLA, BRINDANDO A NUESTROS CLIENTES OPCIONES DE COMPRA Y SERVICIOS OFRECIENDO UNA ATENCIÓN ÚNICA Y HONESTA.</p>
                    <H4>
                    VISIÓN</H4>
                    <br>
                    <p>
                    LIDERAR CADA AÑO LA PREFERENCIA COMO MERCADO DE COMERCIALIZACIÓN DE PRODUCTOS EN TODO EL DISTRITO DE SURCO, ENFOCÁNDONOS PRINCIPALMENTE EN SER EL MEJOR LUGAR DE COMPRA PARA NUESTROS CLIENTES.</p>
                    </div>
                </div>
        </div>
    </section>

@endsection
