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


        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header">Actualizar Cupón
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

                    <form action="{{ route('update.coupon') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $coupon->id }}">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre de Cupón</label>
                          <input type="text" name="coupon_name" class="form-control @error('coupon_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Cupon" value="{{ $coupon->coupon_name }}">

                          @error('coupon_name')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">Descuento de Cupón</label>
                          <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Descuento de Cupon" value="{{ $coupon->discount }}">

                          @error('discount')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Actualizar Cupón</button>
                      </form>




                </div>
            </div>
        </div>
    </div>

</div>
@endsection
