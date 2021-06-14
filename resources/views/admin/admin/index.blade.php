@extends('admin.admin-master')
@section('manage-admin') active @endsection
@section('admin_content')
<div class="sl-mainpanel">

    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="home">Administracion</a>
      <span class="breadcrumb-item active">Administradores</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8">
              <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Listado De Administradores</h6>
                @if(session('Usupdated'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('Usupdated')}}</strong>
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
                        <th class="wd-15p">Nombre</th>
                        <th class="wd-15p">Correo</th>
                        <th class="wd-20p">Estado</th>
                        <th class="wd-10p">Accion</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php
                            $i = 1;
                        @endphp
                    @foreach ($admins as $admin)
                      <tr>
                      <td>{{ $admin->id }}</td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            @if($admin->status == 1)
                            <span class="badge badge-success">Activo</span>
                            @else
                            <span class="badge badge-danger">Iactivo</span>
                            @endif
                        </td>
                        <td>
                        <div class="d-flex flex-row justify-content-around">
                        <a href="{{ url('admin/admins/edit/'.$admin->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i>
                        </a>

                        <form method="POST" action="{{ url('admin/admins/delete/'.$admin->id) }}" class="formulario-eliminaradmin">
                            @csrf
                                <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i></button>
                            </form>

                        @if($admin->status == 1)
                            <a href="{{ url('admin/admins/inactive/'.$admin->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                            @else
                            <a href="{{ url('admin/admins/active/'.$admin->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
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
                <div class="card-header">Nuevo Usuario
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

                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                          @error('name')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo Electronico">
                          @error('email')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                          <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contraseña">
                          @error('password')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>
                      </form>




                </div>
            </div>
        </div>
    </div>


</div>
@endsection


