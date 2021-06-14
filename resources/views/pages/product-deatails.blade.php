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
                            <span>Categoria</span>
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
                        <h2>Detalle de Producto</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Home</a>
                            <span>Detalle de Producto</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

        <!-- Product Details Section Begin -->
        <section class="product-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large"
                                    src="{{ asset($product->image_one) }}" alt="">
                            </div>
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-imgbigurl="{{ asset($product->image_one) }}"
                                    src="{{ asset($product->image_one) }}" alt="">
                                <img data-imgbigurl="{{ asset($product->image_two) }}"
                                    src="{{ asset($product->image_two) }}" alt="">
                                <img data-imgbigurl="{{ asset($product->image_three) }}"
                                    src="{{ asset($product->image_three) }}" alt="">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__text">
                            <h3>{{ $product->product_name }}</h3>
                            <div class="product__details__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(Valoración Alta)</span>
                            </div>
                            <div class="product__details__price">S/.{{ $product->price }}</div>
                            <p>{!! $product->short_description !!}</p>
                            <form action="{{ url('add/to-cart/'.$product->id) }}" method="POST">
                                @csrf
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="qtyproduct" value="{{ $product->product_quantity }}">
                            <button type="submit" class="primary-btn">AGREGAR AL CARRITO</button>
                            </form>
                            <a href="{{ url('add/to-wishlist/'.$product->id) }}" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <ul>
                                <li><b>Disponible</b> <span>En Stock</span></li>
                                <li><b>Stock</b> <span>
                                {!! $product->product_quantity !!}</span></li>
                                <li><b>Envio</b> <span>01 dia de envió <samp>
                                Aprovecha ahora!! delivery gratis por cada compra</samp></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                        aria-selected="true">Descripción</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Información del Producto</h6>
                                        <p>{!! $product->long_description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details Section End -->

        <!-- Related Product Section Begin -->
        <section class="related-product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title related__product__title">
                            <h2>Productos Relacionados</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($related_p as $product)
                    @if($product->status == 1)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset($product->image_one) }}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="{{ url('add/to-wishlist/'.$product->id) }}"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{ url('product/details/'.$product->id) }}"><i class="fa fa-retweet"></i></a></li>
                                    <form action="{{ url('add/to-cart/'.$product->id) }}" method="POST">
                                        @csrf
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="hidden" name="qtyproduct" value="{{ $product->product_quantity }}">
                                    <li><button type="submit"><i class="fa fa-shopping-cart"></i></button></li>
                                </form>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{ url('product/details/'.$product->id) }}">{{ $product->product_name }}</a></h6>
                                <h5>S/.{{ $product->price }}</h5>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Related Product Section End -->

@endsection
