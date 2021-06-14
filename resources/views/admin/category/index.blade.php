@extends('admin.admin-master')
@section('category') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{url('admin/home')}}">Admin</a>
      <span class="breadcrumb-item active">Categorias</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8">
              <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Listado De Categorias</h6>
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
                        <th class="wd-15p">Nombre de Categoría</th>
                        <th class="wd-20p">Estado</th>
                        <th class="wd-10p">Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach ($categories as $category)
                      <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            @if($category->status == 1)
                            <span class="badge badge-success">Activo</span>
                            @else
                            <span class="badge badge-danger">Inactivo</span>
                            @endif
                        </td>
                        <td>
                        <div class="d-flex flex-row justify-content-around">
                            <a href="{{ url('admin/categories/edit/'.$category->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                           <!--  <a href="{{ url('admin/categories/delete/'.$category->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> -->

                            <form method="POST" action="{{ url('admin/categories/delete/'.$category->id) }}" class="formulario-eliminarcategoria">
                            @csrf
                                <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i></button>
                            </form>

                            @if($category->status == 1)
                            <a href="{{ url('admin/categories/inactive/'.$category->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                            @else
                            <a href="{{ url('admin/categories/active/'.$category->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
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
                <div class="card-header">Agregar Categoía
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

                    <form action="{{ route('store.category') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre de Categoría</label>
                          <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Categoria">

                          @error('category_name')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Agregar</button>
                      </form>




                </div>
            </div>
        </div>
    </div>

</div>
@endsection
