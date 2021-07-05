@extends('admin.admin-master')

@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{ url('/admin/users') }}">Usuarios</a>
      <span class="breadcrumb-item active">Usuario</span>
      <span class="breadcrumb-item active">Editar</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header">Editar Usuario
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

                    <form action="{{ route('update.user') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $user->id }}" name="id">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Editar Usuario</label>
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->name }}">
                          @error('name')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->email }}">
                          @error('email')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                          <input type="text" name="dni" class="form-control @error('dni') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->dni }}">
                          @error('dni')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                          <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $user->telefono }}">
                          @error('telefono')
                            <span class="text-danger">{{$message}}</span>
                          @enderror


                          <select class="form-control @error('status') is-invalid @enderror" name="status" >
                        @if($user->status == 2)
                        <option value="{{ $user->status }}" label="Administrador"></option>
                        <option value="1" label="Cliente"></option>
                        @else
                        <option value="{{ $user->status }}" label="Cliente"></option>
                        <option value="2" label="Administrador"></option>
                        @endif
                        </select>
                          @error('status')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Editar Usuario</button>
                      </form>




                </div>
            </div>
        </div>
    </div>

</div>
@endsection
