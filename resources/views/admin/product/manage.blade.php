@extends('admin.admin-master')
@section('products') active show-sub @endsection
@section('manage-products') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{url('admin/home')}}">Admin</a>
      <span class="breadcrumb-item active">Gestionar Productos</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-12">
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('status')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

            @if(session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('delete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Listado de Productos</h6>
                <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th class="wd-15p">Imagen</th>
                        <th class="wd-15p">Nombre de Producto</th>
                        <th class="wd-15p">Cantidad de Producto</th>
                        <th class="wd-15p">Categoría</th>
                        <th class="wd-15p">Precio</th>
                        <th class="wd-20p">Estado</th>
                        <th class="wd-25p">Acción</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($products as $row)
                      <tr>
                      <td>{{ $row->id }}</td>
                        <td>
                            <img src="{{ asset($row->image_one) }}" width="50px;" height="50px;" alt="">
                        </td>
                        <td>{{ $row->product_name }}</td>
                        <td>
                        @if($row->product_quantity <= 20)
                        {{ $row->product_quantity }}
                        <span class="badge badge-danger">ALERTA DE STOCK</span>
                        @else
                        {{ $row->product_quantity }}
                        @endif
                        </td>
                        <td>{{ $row->category->category_name }}</td>
                        <td>S/.{{ $row->price }}</td>
                        <td>
                            @if($row->status == 1)
                            <span class="badge badge-success">Activo</span>
                            @else
                            <span class="badge badge-danger">Inactivo</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/products/edit/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>

                            <a href="{{ url('admin/products/delete/'.$row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Seguro de eliminar este Producto')"><i class="fa fa-trash"></i></a>

                            @if($row->status == 1)
                            <a href="{{ url('admin/products/inactive/'.$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                            @else
                            <a href="{{ url('admin/products/active/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                            @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->
              </div><!-- card -->
        </div>

    </div>

</div>
@endsection


