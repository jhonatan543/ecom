@extends('admin.admin-master')
@section('orders') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{url('admin/home')}}">Admin</a>
      <span class="breadcrumb-item active">Vista del Pedido</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Información de Envío</h6>
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Nombres: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="firstname" value="{{ $shipping->shipping_first_name }}" readonly placeholder="Enter firstname">
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Apellidos: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="lastname"  placeholder="Enter lastname" value="{{ $shipping->shipping_last_name }}" readonly>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Correo Electronico: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="email" \ placeholder="Enter email address" value="{{ $shipping->shipping_email }}" readonly>
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Telefono: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email"  placeholder="Enter email address" value="{{ $shipping->shipping_phone }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Dirección: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email"  placeholder="Enter email address" value="{{ $shipping->address }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Ciudad/Distrito: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email"  placeholder="Enter email address" value="{{ $shipping->state }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">DNI: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email" placeholder="Enter email address" value="{{ $shipping->shipping_dni }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Codigo Postal: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email" placeholder="Enter email address" value="{{ $shipping->post_code }}" readonly>
                    </div>
                  </div><!-- col-4 -->

              </div><!-- row -->

            </div><!-- form-layout -->

          </div><!-- card -->

          <div class="card pd-20 pd-sm-40" style="margin-top: 20px;">
            <h6 class="card-body-title">Orders</h6>
            <div class="form-layout">
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">N° Boleta: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="firstname" value="{{ $order->invoice_no }}" readonly >
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Metodo de Pago: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="lastname"  placeholder="Enter lastname" value="{{ $order->payment_type }}" readonly>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Total: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="email" \ placeholder="Enter email address" value="{{ $order->total }}" readonly>
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Sub Total: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="email"  placeholder="Enter email address" value="{{ $order->subtotal }}" readonly>
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Descuento de Cupón: <span class="tx-danger">*</span></label>
                      @if ($order->coupon_discount == NULL)
                      <span class="badge badge-pill badge-danger">NO</span>
                          @else
                          <span class="badge badge-pill badge-danger">{{ $order->coupon_discount }}%</span>
                      @endif

                    </div>

                    <div class="form-group">
                      <label class="form-control-label">Estado: <span class="tx-danger">*</span></label>
                      @if($order->status == 2)
                            <span class="badge badge-success">Finalizado</span>
                            @elseif($order->status == 1)
                            <span class="badge badge-warning">Revisado</span>
                            @else
                            <span class="badge badge-danger">Pendiente</span>
                            @endif
                    </div>
                  </div><!-- col-4 -->


              </div><!-- row -->

            </div><!-- form-layout -->

          </div><!-- card -->

          <div class="card pd-20 pd-sm-40" style="margin-top: 20px;">
            <h6 class="card-body-title">Productos del Pedido</h6>
            <div class="form-layout">

                <div class="table-wrapper">
                    <table id="" class="table display responsive nowrap ">
                      <thead>
                        <tr>
                          <th class="wd-15p">Imagen</th>
                          <th class="wd-15p">Nombre del Producto</th>
                          <th class="wd-15p">Cantidad</th>
                        </tr>
                      </thead>
                      <tbody>

                          @foreach ($orderItems as $row)
                        <tr>
                          <td>
                              <img src="{{ asset($row->product->image_one) }}" height="50px;" width="50px;" alt="img">
                            </td>
                            <td>
                                {{ $row->product->product_name }}
                            </td>

                            <td>
                                {{ $row->product_qty }}
                            </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->




            </div><!-- form-layout -->

          </div><!-- card -->


    </div>

</div>
@endsection
