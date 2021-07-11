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
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">N°Boleta</th>
                        <th scope="col">Tipo de Pago</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col">Total</th>
                        <th scope="col">Cupón</th>
                        <th scope="col">Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{ $order->invoice_no }}</td>
                        <td>{{ $order->payment_type }}</td>
                        <td>S/.{{ $order->subtotal }}</td>
                        <td>S/.{{ $order->total }}</td>
                        <td>
                            @if($order->coupon_discount == NULL)
                            <span class="badge badge-danger">No</span>
                            @else
                            <span class="badge badge-success">Si</span>
                            @endif
                        </td>
                        <td>
                        @if($order->status == 2)
                            <span class="badge badge-success">Finalizado</span>
                            @elseif($order->status == 1)
                            <span class="badge badge-warning">Revisado</span>
                            @else
                            <span class="badge badge-danger">Pendiente</span>
                            @endif
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
          </div>
        </div>


</div>

<div class="row mt-5">
    <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Nombre del Envío</th>
                          <th scope="col">Apellido del Envío </th>
                          <th scope="col">Correo del Envío</th>
                          <th scope="col">DNI/CE del Envío</th>
                          <th scope="col">Telefono del Envío</th>
                          <th scope="col">Dirección del Envío</th>
                          <th scope="col">Ciudad del Envío</th>
                          <th scope="col">Código postal del Envío</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{ $shipping->shipping_first_name }}</td>
                          <td>{{ $shipping->shipping_last_name }}</td>
                          <td>{{ $shipping->shipping_email }}</td>
                          <td>{{ $shipping->shipping_dni }}</td>
                          <td>{{ $shipping->shipping_phone }}</td>
                          <td>{{ $shipping->address }}</td>
                          <td>{{ $shipping->state }}</td>
                          <td>{{ $shipping->post_code }}</td>
                        </tr>
                      </tbody>
                    </table>
              </div>
            </div>
      </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Imagen del Producto</th>
                          <th scope="col">Nombre del Producto</th>
                          <th scope="col">Descripcion del Producto</th>
                          <th scope="col">Codigo del Producto</th>
                          <th scope="col">Cantidad del Producto</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($orderitems as $item)
                        <tr>
                          <td>
                              <img src="{{ asset($item->product->image_one) }}" height="60px;" width="60px;" alt="">
                          </td>
                          <td>{{ $item->product->product_name }}</td>
                          <td>{{ $item->product->short_description }}</td>
                          <td>{{ $item->product->product_code }}</td>
                          <td>{{ $item->product_qty }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
              </div>
            </div>
      </div>
    </div>
</div>
</section>
@endsection
