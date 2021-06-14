@extends('admin.admin-master')

@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ url('/admin/admins') }}">Administradores</a>
      <span class="breadcrumb-item active">Administrador</span>
      <span class="breadcrumb-item active">Editar</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header">Editar Administrador
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
                        <input type="hidden" value="{{ $admin->id }}" name="id">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Editar Administrador</label>
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $admin->name }}">
                          @error('name')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $admin->email }}">
                          @error('email')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Editar Administrador</button>
                      </form>




                </div>
            </div>
        </div>
    </div>

</div>
@endsection
