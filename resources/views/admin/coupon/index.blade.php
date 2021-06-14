@extends('admin.admin-master')
@section('coupon') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{url('admin/home')}}">Admin</a>
      <span class="breadcrumb-item active">Cupón</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8">
              <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Listado de Cupones</h6>


                  @if(session('status'))
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>{{session('status')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                  <!-- @if(session('delete'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{session('delete')}}</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif -->
                <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-15p">Id</th>
                        <th class="wd-15p">Nombre de Cupón</th>
                        <th class="wd-15p">Descuento de Cupón</th>
                        <th class="wd-20p">Estado</th>
                        <th class="wd-10p">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach ($coupons as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->coupon_name }}</td>
                        <td>{{ $row->discount }}%</td>
                        <td>
                            @if($row->status == 1)
                            <span class="badge badge-success">Activo</span>
                            @else
                            <span class="badge badge-danger">Inactivo</span>
                            @endif
                        </td>
                        <td>
                        <div class="d-flex flex-row justify-content-around">
                            <a href="{{ url('admin/coupon/edit/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>

                            <form method="POST" action="{{ url('admin/coupon/delete/'.$row->id) }}" class="formulario-eliminarcupon">
                            @csrf
                                <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i></button>
                            </form>

                            @if($row->status == 1)
                            <a href="{{ url('admin/coupon/inactive/'.$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                            @else
                            <a href="{{ url('admin/coupon/active/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                            @endif
                            </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->
              </div><!-- card -->
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Agregar Cupón
                </div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif

                    <form action="{{ route('store.coupon') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre de Cupón</label>
                          <input type="text" name="coupon_name" class="form-control @error('coupon_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Cupon">

                          @error('coupon_name')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Descuento de Cupón</label>
                          <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Descuento de Cupon">

                          @error('discount')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Agregar Cupón</button>
                      </form>




                </div>
            </div>
        </div>
    </div>

</div>
@endsection
