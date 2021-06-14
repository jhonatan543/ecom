@extends('layouts.fontend-master')
@section('content')
       <!-- Hero Section Begin -->
       <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('pages.inc.category')
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

                        <div class="hero__item set-bg" data-setbg="{{ asset('fontend') }}/img/hero/principal.png">
                            <div class="hero__text">
                                <span style="color: #233e8b;">ROPA DE MODA</span>
                                <h2>Ropas <br />100% Marca</h2>
                                <p>Recogida y entrega gratis disponibles</p>
                                <a href="{{route('login')}}" class="primary-btn">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Categories Section Begin -->
        <section class="categories">
            <div class="container">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        @foreach ($products as $product)
                        @if($product->status == 1)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ asset($product->image_one) }}">
                                <h5><a href="{{ url('product/details/'.$product->id) }}">{{ $product->product_name }}</a></h5>
                            </div>
                        </div>
                        @endif
                         @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->

        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Productos Destacados</h2>
                        </div>
                        <div class="featured__controls">
                            <ul>
                                <li class="active" data-filter="*">Todos</li>
                                @foreach ($categories as $cat)
                                @if($cat->status == 1)
                                <li data-filter=".filter{{ $cat->id }}">{{ $cat->category_name }}</li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row featured__filter">
                @foreach ($categories as $cat)
                    @php
                        $products = App\Product::where('category_id',$cat->id)->latest()->get();
                    @endphp
                    @foreach ($products as $product)
                    @if($cat->status == 1)
                    @if($product->status == 1)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix filter{{ $cat->id }}">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{ asset($product->image_one) }}">
                                <ul class="featured__item__pic__hover">
                                <li><a href="{{ url('add/to-wishlist/'.$product->id) }}"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{ url('product/details/'.$product->id) }}"><i class="fa fa-retweet"></i></a></li>
                                    <form action="{{ url('add/to-cart/'.$product->id) }}" method="POST">
                                     @csrf
                                     <input type="hidden" name="qtyproduct" value="{{ $product->product_quantity }}">
                                     <input type="hidden" name="price" value="{{ $product->price }}">
                                    <li><button type="submit" ><i class="fa fa-shopping-cart"></i></button></li>

                                </form>

                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="{{ url('product/details/'.$product->id) }}">{{ $product->product_name }}</a></h6>
                                <h5>S/.{{ $product->price }}</h5>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    @endforeach
                @endforeach

                </div>
            </div>
        </section>
        <!-- Featured Section End -->

        <!-- Banner Begin -->
        <div class="banner">
            <div class="container" style="margin-bottom: 20px;">
            <div class="section-title">
                            <h2>Proveedores</h2>
                        </div>
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6" style="margin-left: 150px;">
                        <div class="banner__pic">
                            <img src="{{ asset('fontend') }}/img/banner/logo1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{ asset('fontend') }}/img/banner/gucci.png" alt="" style="width: 120px; height: 120px" >
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{ asset('fontend') }}/img/banner/holden.png" alt="" style="width: 120px; height: 120px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{ asset('fontend') }}/img/banner/irun.gif" alt="" style="width: 120px; height: 120px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="{{ asset('fontend') }}/img/banner/walon.png" alt="" style="width: 120px; height: 120px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Latest Product Section Begin -->
        <section class="latest-product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Ultimos Productos</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                   @foreach ($lts_p as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset($product->image_one) }}" style="height: 40px; width:40px;"  alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->product_name }}</h6>
                                            <span>${{ $product->price }}</span>
                                        </div>
                                    </a>
                                    @endforeach

                                </div>
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($lts_p as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset($product->image_one) }}" style="height: 40px; width:40px;"  alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->product_name }}</h6>
                                            <span>S/.{{ $product->price }}</span>
                                        </div>
                                    </a>
                                @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Todos Los Productos</h4>
                            <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($lts_p as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset($product->image_one) }}" style="height: 40px; width:40px;"  alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->product_name }}</h6>
                                            <span>S/.{{ $product->price }}</span>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($lts_p as $product)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset($product->image_one) }}" style="height: 40px; width:40px;"  alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->product_name }}</h6>
                                             <span>S/.{{ $product->price }}</span>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Product Section End -->



@endsection
