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
                        <h2>Carrito de Compras</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Home</a>
                            <span>Carrito de Compras</span>
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
                      @elseif(session('cart_update1'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{session('cart_update1')}}</strong>
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
                                    <th class="shoping__product"  style="    padding-left: 50px;">Descripción</th>
                                    <th class="shoping__product"  style="    padding-left: 50px;">Precio</th>
                                    <th class="shoping__product">Cantidad</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($carts as $cart)

                                <tr>
                                    <td class="shoping__cart__item">
                                    <div class="d-flex flex-row">
                                        <img src="{{ asset($cart->product->image_one) }}" style="height: 70px; width:70px;" alt="">
                                        <h5>{{ $cart->product->product_name }}</h5>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__item" style="    padding-left: 50px;" >
                                    <h5>{{ $cart->product->short_description }}</h5>
                                    </td>
                                    <td class="shoping__cart__item" style="    padding-left: 50px;" >
                                    <h5>S/.{{ $cart->price }}</h5>
                                    </td>

                                    <td class="shoping__cart__item">


                                        <div class="quantity">
                                        <form action="{{ url('cart/quantity/update/'.$cart->id) }}" method="POST">
                                            @csrf

                                            <div class="pro-qty">
                                            <input type="hidden" name="product" value="{{ $cart->product_id }}" min="1" >
                                            <input type="hidden" name="productqty" value="{{ $cart->product->product_quantity }}" min="1">
                                            <input type="text" name="qty" value="{{ $cart->qty }}" min="1"  readonly>
                                            </div>
                                            <button type="submit" class="badge badge-success">Verificar</button>

                                        </form>
                                        </div>
                                    </td>

                                    <td class="shoping__cart__total">
                                        {{ $cart->price * $cart->qty }}
                                    </td>
                                    <td class="shoping__cart__item__close">

                                            <a href="{{ url('cart/destroy/'.$cart->id) }}"> <span class="icon_close">
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{ url('/') }}" class="primary-btn cart-btn">CONTINUAR COMPRANDO</a>

                    </div>
                </div>
                <div class="col-lg-6">

                    @if (Session::has('coupon'))
                    @else
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Cupón de Descuento</h5>

                            <form action="{{ url('coupon/apply') }}" method="POST">
                                @csrf
                                <input type="text" name="coupon_name" placeholder="Codigo de Cupón">
                                <button type="submit" class="site-btn">APLICAR CUPÓN</button>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Total del Carrito</h5>
                        <ul>

                        @if (Session::has('coupon'))
                            <li>Subtotal <span>S/.{{ $subtotal }}</span></li>
                            <li>Cupón <span>{{ session()->get('coupon')['coupon_name'] }} <a href="{{ url('coupon/destroy') }}">X</a> </span></li>
                            <li>Descuento <span>{{ session()->get('coupon')['coupon_discount'] }}% ( - S/.{{    session()->get('coupon')['discount_amount'] }} )</span></li>
                            <li>Total <span>S/.{{ $subtotal - session()->get('coupon')['discount_amount'] }}</span></li>
                        @else
                            <li>Total <span>S/.{{ $subtotal }}</span></li>
                        @endif
                        </ul>

                        <a href="{{ url('checkout') }}" class="primary-btn">Proceder La Compra</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection
