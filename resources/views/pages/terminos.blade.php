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
                        <h2>Términos y Condiciones</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Home</a>
                            <span>Términos y Condiciones</span>
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
                    TÉRMINOS Y CONDICIONES</H4>
                    <br>
                    <p>
                    SE COMPROMETE A REALIZAR SU MEJOR ESFUERZO PARA ASEGURAR LA DISPONIBILIDAD CONTINUA DE SUS SERVICIOS, ASÍ COMO PARA ASEGURAR LA AUSENCIA DE ERRORES EN CUALQUIER TRANSMISIÓN DE INFORMACIÓN QUE PUDIERA TENER LUGAR EN LAS TRANSACCIONES; SIN EMBARGO, ACOMSIV NO SE HACE RESPONSABLE CUANDO SUS SERVICIOS SE VEAN AFECTADOS POR LA NATURALEZA MISMA DEL INTERNET. ASIMISMO, LOS CLIENTES DECLARAN CONOCER QUE EL ACCESO A LOS SERVICIOS DEL SITIO WEB PODRÍA OCASIONALMENTE VERSE SUSPENDIDO O RESTRINGIDO POR LA REALIZACIÓN DE TRABAJOS DE MANTENIMIENTO O ADMINISTRACIÓN DE LOS PRODUCTOS OFERTADOS.ACOMSIV PODRÁ ACTUALIZAR Y/O MODIFICAR LOS PRESENTES TÉRMINOS Y CONDICIONES SIN PREVIO AVISO. POR ESTE MOTIVO RECOMENDAMOS REVISAR LOS TÉRMINOS Y CONDICIONES CADA VEZ QUE UTILICE LA PÁGINA WEB, YA QUE LA VERSIÓN APLICABLE SERÁ LA QUE SE ENCUENTRE COLGADA AL MOMENTO DE LA CONSULTA.</p>
                    </div>
                </div>
        </div>
    </section>

@endsection
