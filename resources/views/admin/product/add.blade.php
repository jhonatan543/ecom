@extends('admin.admin-master')
@section('products') active show-sub @endsection
@section('add-products') active @endsection
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{url('admin/home')}}">Admin</a>
      <span class="breadcrumb-item active">Registrar Producto</span>
    </nav>

    <div class="sl-pagebody">
      <div class="row row-sm">

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Nuevo Producto</h6>
        <form action="{{ route('store-products') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-layout">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Nombre de Producto: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_name" value="{{ old('product_name') }}" placeholder="Nombre del Producto">
                    @error('product_name')
                       <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Codigo de Producto: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_code" value="{{ old('product_code') }}" placeholder="Codigo del Producto">
                    @error('product_code')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Precio: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="price" value="{{ old('price') }}" placeholder="Precio del Producto">
                    @error('price')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Cantidad: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="product_quantity" value="{{ old('product_quantity') }}" placeholder="Cantidad del Producto">
                      @error('product_quantity')
                      <strong class="text-danger">{{ $message }}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->

                <div class="col-lg-4">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Categoría: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" name="category_id" data-placeholder="Choose country">
                      <option label="Escoja una Categoria"></option>
                        @foreach ($categories as $category)
                        @if($category->status == 1)
                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                      @endif
                      @endforeach

                    </select>
                    @error('category_id')
                    <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Marca: <span class="tx-danger">*</span></label>
                      <select class="form-control select2" name="brand_id" data-placeholder="Choose country">
                        <option label="Escoja una Marca"></option>
                        @foreach ($brands as $brand)
                        @if($brand->status == 1)
                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                        @endif
                        @endforeach
                      </select>
                      @error('brand_id')
                      <strong class="text-danger">{{ $message }}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">Descripción Corta: <span class="tx-danger">*</span></label>
                      <div class="form-group">
                        <textarea class="form-control" name="short_description" id="exampleFormControlTextarea1" placeholder="Descripcion Corta del Producto" rows="3"></textarea>
                    </div>
                        @error('short_description')
                      <strong class="text-danger">{{ $message }}</strong>
                      @enderror
                    </div>

                  </div><!-- col-4 -->


                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">Descripción Larga: <span class="tx-danger">*</span></label>
                      <div class="form-group">
                        <textarea class="form-control" name="long_description" id="exampleFormControlTextarea1" placeholder="Descripcion Larga del Producto" rows="3"></textarea>
                    </div>
                      @error('long_description')
                      <strong class="text-danger">{{ $message }}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->


                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Miniatura de Imagen: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="image_one" >
                      @error('image_one')
                      <strong class="text-danger">{{ $message }}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Imagen Dos: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="image_two" >
                      @error('image_two')
                      <strong class="text-danger">{{ $message }}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Imagen Tres: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="image_three" >
                      @error('image_three')
                      <strong class="text-danger">{{ $message }}</strong>
                      @enderror
                    </div>
                  </div><!-- col-4 -->

              </div><!-- row -->

              <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5">Registrar Producto</button>
              </div><!-- form-layout-footer -->
            </form>
            </div><!-- form-layout -->
          </div><!-- card -->
    </div>

</div>
@endsection
