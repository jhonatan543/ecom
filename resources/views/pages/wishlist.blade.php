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
                            <li><a href="#">{{ $row->category_name }}</a></li>
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
                        <h2>Página de lista de deseos</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Home</a>
                            <span>Página de lista de deseos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('cart_delete'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{session('cart_delete')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif

                    @if(session('cart_update'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('cart_update')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Productos</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Carrito</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($wishlists as $row)

                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset($row->product->image_one) }}" style="height: 70px; width:70px;" alt="">
                                        <h5>{{ $row->product->product_name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{ $row->product->short_description }}
                                    </td>
                                    <td class="shoping__cart__price">
                                        S/.{{ $row->product->price }}
                                    </td>

                                    <td class="shoping__cart__price">
                                        <form action="{{ url('add/to-cart/'.$row->product_id) }}" method="POST">
                                            @csrf
                                        <input type="hidden" name="price" value="{{ $row->product->price }}">

                                    <input type="hidden" name="qtyproduct" value="{{ $row->product->product_quantity }}">

                                       <button class="btn btn-sm btn-danger">Agregar al Carrito</button>
                                    </form>
                                    </td>

                                    <td class="shoping__cart__item__close">

                                            <a href="{{ url('wishlist/destroy/'.$row->id) }}"> <span class="icon_close">
                                            </span>
                                            </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection
