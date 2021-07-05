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
                        <h2>Verificación</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Home</a>
                            <span>Pagina de Verificación</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

     <!-- Checkout Section Begin -->
     <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Información de Envío</h4>
                <form action="{{ route('place-order') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nombres<span>*</span></p>
                                        <input type="text" name="shipping_first_name" value="{{ Auth::user()->name }}">
                                        @php
                                        $carts = App\Cart::where('user_ip',request()->ip())->latest()->get();
                                         @endphp
                                        @foreach ($carts as $cart)
                                        <input type="hidden" name="productqty1" value="{{ $cart->product->product_quantity }}" min="1">
                                        @endforeach

                                        @error('shipping_first_name')
                       <strong class="text-danger">{{ $message }}</strong>
                    @enderror

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Apellidos<span>*</span></p>
                                        <input type="text" name="shipping_last_name" placeholder="Ejem. Vila Buleje">
                                        @error('shipping_last_name')
                                     <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Telefono<span>*</span></p>
                                        <input type="text" name="shipping_phone" placeholder="Ejem. 995894756" value="{{ Auth::user()->telefono }}" >
                                        @error('shipping_phone')
                                     <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Correo Electronico<span>*</span></p>
                                        <input type="email" name="shipping_email" value="{{ Auth::user()->email }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Dirección<span>*</span></p>
                                <input type="text" placeholder="Ejem. Avenida y Referencia" class="checkout__input__add" name="address">
                                @error('address')
                                     <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>DNI<span>*</span></p>
                                        <input type="text" name="shipping_dni" placeholder="Ejem. 70845064" value="{{ Auth::user()->dni }}" >
                                        @error('shipping_dni')
                                     <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="checkout__input">
                                        <p>Ciudad/Distrito<span>*</span></p>
                                        <input type="text" name="state" value="{{ 'Chorrillos' }}" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>Codigo Postal<span>*</span></p>
                                <input type="text" name="post_code" value="{{ '15054' }}" readonly>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Tu Pedido</h4>
                                <div class="checkout__order__products">Productos <span>SubTotal</span></div>
                                <ul>
                                    @foreach ($carts as $cart)
                                    <li>{{  $cart->product->product_name }} ({{ $cart->qty }}) <span>S/.{{ $cart->price * $cart->qty }}</span></li>
                                    @endforeach
                                </ul>

                        @if (Session::has('coupon'))
                                <div class="checkout__order__total">Total <span>S/. {{ $subtotal - session()->get('coupon')['discount_amount'] }}</span></div>

                                <input type="hidden" name="coupon_discount" value="{{ session()->get('coupon')['coupon_discount'] }}">
                                <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                                <input type="hidden" name="total" value="{{ $subtotal - session()->get('coupon')['discount_amount'] }}">
                        @else
                        <div class="checkout__order__subtotal">Subtotal <span>S/.{{ $subtotal }}</span></div>
                        <input type="hidden" name="subtotal" value="{{ $subtotal }}">
                        <input type="hidden" name="total" value="{{ $subtotal }}">
                        @endif
                                <h5 style="color: #1c1c1c;
                                 font-weight: 700;">Metodo de Pago</h5>
                                <br>
                                <div class="">
                                    <label for="payment">
                                        <input type="text" id="payment" value="contraentrega" style="margin-bottom: 10px;
                                        border: 0px; color: #6f6f6f; background-color: #f5f5f5;" name="payment_type" readonly>
                                        @error('payment_type')
                                     <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                    </label>
                                </div>

                                <a onclick="mostrarterminos()" class="btn btn-secondary" style="margin-bottom: 15px; color: white;"
                                 ">Ver Términos y Condiciones</a>

                                    <label  >
                                     <input  type="checkbox" onclick="mostrarContenido()" id="presionar">
                                     Acepto los Terminos y Condiciones
                                    </label>
                                <button type="submit" id="partedet" class="site-btn" style="display: none;">REALIZAR PEDIDO</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <!-- Checkout Section End -->
@endsection
<script src="js/sweetalert2.js"></script>
    <script>
           function mostrarContenido() {
        elemento = document.getElementById("partedet");
        presionar = document.getElementById("presionar");
        if (presionar.checked) {
            elemento.style.display='block';
        }
        else {
            elemento.style.display='none';
        }
    }
    function mostrarterminos() {
        Swal.fire({
  title: '<a class="tyc">Términos y condiciones<br> "ACOMSIV"</a>',
   width: 600,
  html: '<p class="indicador">1. LOS PEDIDOS SÓLO PODRÁN SER ENVIADOS A LAS PERSONAS QUE VIVEN DENTRO DE RANGO DE LUGARES A REALIZAR EL DELIVERY (SANTA ISABEL DE VILLA, BRISAS, 3 DE OCTUBRE, DELICIAS, TERRAZAS) 2. LOS HORARIOS DE ATENCIÓN PRESENCIAL SON DE LUNES A DOMINGO DE 10:00 AM A 7:00PM, CUALQUIER CAMBIO DE HORARIO SE     COMUNICARÁ A TRAVÉS DEL SITIO WEB. 3. LOS PAGOS POR EL PEDIDO ENTREGADO SERÁ REALIZADO EN CONTRAENTREGA. EN CASO SE DESEE REALIZAR EL PAGO OTRO DÍA, DEBE COMUNICARSE POR VÍA WHATSAPP CON LA DUEÑA DEL NEGOCIO PARA HACER LA COORDINACIÓN RESPECTIVA. 4. NO SE COBRARÁ NINGÚN PAGO ADICIONAL POR EL SERVICIO DE DELIVERY. 5. PARA PROSEGUIR CON LA ORDEN DEL PEDIDO DEBE SIEMPRE ESTAR DE ACUERDO Y ACEPTAR LOS TÉRMINOS Y CONDICIONES.</p>',
  imageUrl: '{{ asset('fontend') }}/img/acomsiv.png',
  imageWidth: 200,
  allowOutsideClick: false,
  confirmButtonColor: 'black',
  confirmButtonText: '<a class="entendido2">Entendido</a>'
});
}
        </script>

