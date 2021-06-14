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

    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('fontend') }}/img/carrito.PNG">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Categorias</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Home</a>
                            <span>Categorias</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

     <!-- Product Section Begin -->
     <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Categorias</h4>
                            <ul>
                                @foreach ($categories as $cat)
                                <li><a href="{{ url('category/product-show/'.$cat->id) }}">{{ $cat->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                 <div class="sidebar__item">
                            <div class="latest-product__text">
                                <h4>Ultimos Productos</h4>
                                <div class="latest-product__slider owl-carousel">
                                <div class="latest-prdouct__slider__item">
                                   @foreach ($products as $product)
                                   @if($product->status == 1)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset($product->image_one) }}" style="height: 40px; width:40px;"  alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->product_name }}</h6>
                                            <span>S/.{{ $product->price }}</span>
                                        </div>
                                    </a>
                                    @endif
                                    @endforeach

                                </div>
                                <div class="latest-prdouct__slider__item">
                                    @foreach ($products as $product)
                                    @if($product->status == 1)
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ asset($product->image_one) }}" style="height: 40px; width:40px;"  alt="">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $product->product_name }}</h6>
                                            <span>S/.{{ $product->price }}</span>
                                        </div>
                                    </a>
                                    @endif
                                @endforeach

                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">

                    <div class="row">

                        @forelse ($products as $product)
                        @if($product->status == 1)

                        <div class="col-lg-4 col-md-6 col-sm-6">

                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{ asset($product->image_one) }}">
                                <ul class="featured__item__pic__hover">
                                <li><a href="{{ url('add/to-wishlist/'.$product->id) }}"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{ url('product/details/'.$product->id) }}"><i class="fa fa-eye"></i></a></li>
                                    <form action="{{ url('add/to-cart/'.$product->id) }}" method="POST">
                                     @csrf
                                     <input type="hidden" name="price" value="{{ $product->price }}">
                                     <input type="hidden" name="qtyproduct" value="{{ $product->product_quantity }}">
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


                        @elseif($product->status == 0)
                        <h4 class="text-danger">No se encontro Productos</h4>
                        @endif

                        @endforeach

                    </div>

                        {{ $products->links() }}

                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
