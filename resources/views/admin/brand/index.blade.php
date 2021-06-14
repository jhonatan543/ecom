@extends('admin.admin-master')
@section('brand') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{url('admin/home')}}">Admin</a>
      <span class="breadcrumb-item active">Marca</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8">
              <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Lista De Marcas</h6>
                @if(session('Catupdated'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('Catupdated')}}</strong>
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
                        <th class="wd-15p">Nombre de Marca</th>
                        <th class="wd-20p">Estado</th>
                        <th class="wd-10p">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach ($brands as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->brand_name }}</td>
                        <td>
                            @if($row->status == 1)
                            <span class="badge badge-success">Active</span>
                            @else
                            <span class="badge badge-danger">Iactive</span>
                            @endif
                        </td>
                        <td>
                        <div class="d-flex flex-row justify-content-around">
                            <a href="{{ url('admin/brand/edit/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>

                            <form method="POST" action="{{ url('admin/brand/delete/'.$row->id) }}" class="formulario-eliminarmarca">
                            @csrf
                                <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i></button>
                            </form>

                            @if($row->status == 1)
                            <a href="{{ url('admin/brand/inactive/'.$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                            @else
                            <a href="{{ url('admin/brand/active/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
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
                <div class="card-header">Agregar Marca
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

                    <form action="{{ route('store.brand') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre de Marca</label>
                          <input type="text" name="brand_name" class="form-control @error('brand_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Marca">

                          @error('brand_name')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Agregar Marca</button>
                      </form>




                </div>
            </div>
        </div>
    </div>

</div>
@endsection
