@extends('admin.admin-master')
@section('dashboard') active @endsection
@section('admin_content')
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="{{url('admin/home')}}">Administracion</a>
      <span class="breadcrumb-item active">Dashboard</span>
    </nav>
    <br>
    <center>
<h1> ESTADISTICAS ACOMSIV</H1>
</center>
    <div class="sl-pagebody">

      <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
          <div class="card pd-20 bg-primary">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
              <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">TIEMPO REALIZANDO UN PEDIDO</h6>
              <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="white" class="bi bi-alarm-fill" viewBox="0 0 16 16">
  <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
</svg>
</div>
              <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $tiempo }}m</h3>
            </div><!-- card-body -->
            <div class="d-flex flex-row align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              <div>
                <span class="tx-11 tx-white-6">TIEMPO SIN SISTEMA</span>
              </div>
              <div>
                <h6 class="tx-white mg-b-0">12m</h6>
              </div>
            </div><!-- -->
          </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
          <div class="card pd-20 bg-info">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
              <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">CANTIDAD DE PRODUCTOS DE ESTE MES</h6>

              <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="white" class="bi bi-speedometer2" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
  <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
</svg>

                    @php
                     $productmin = $products->count('id');
                     $ldate = date('m');
                     $ldate1 = $ldate - '1';
                     @csrf
                     @endphp

                     <div>
                     @if( $ldate === '06')
                <span class="tx-11 tx-white-6">Junio</span>
                @elseif( $ldate  === '07')
                <span class="tx-11 tx-white-6">Julio</span>
                @elseif( $ldate  === '08')
                <span class="tx-11 tx-white-6">Agosto</span>
                @elseif( $ldate  === '09')
                <span class="tx-11 tx-white-6">Septiembre</span>
                @endif

              <h3 class="mg-b-0 tx-white tx-lato tx-bold">N° {{ $productmin }}</h3>
              </div>
            </div><!-- card-body -->
            <div class="d-flex  align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              <div>
                <span class="tx-11 tx-white-6">CANTIDAD POR MES SIN SISTEMA </span>
              </div>
              <div>
                @if( $ldate1 === 05)
                <span class="tx-11 tx-white-6">Mayo</span>
                @elseif( $ldate1  === 06)
                <span class="tx-11 tx-white-6">Junio</span>
                @elseif( $ldate1  === 07)
                <span class="tx-11 tx-white-6">Julio</span>
                @endif
                <h6 class="tx-white mg-b-0">N° 45</h6>
              </div>
            </div><!-- -->
          </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
          <div class="card pd-20 bg-purple">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
              <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">VENTAS DE ESTE MES</h6>
              <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">

                @php
                     $ordercount= $orders->count('id');
                     @csrf
                     @endphp
                     <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="white" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 65 65" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M488.399,492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823,0-26.882,12.06-26.882,26.882V492
			h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823,0-26.882,12.06-26.882,26.882V492h-55.692v-90.204
			c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823,0-26.882,12.06-26.882,26.882V492H23.601c-5.523,0-10,4.477-10,10
			s4.477,10,10,10h464.798c5.523,0,10-4.477,10-10S493.922,492,488.399,492z M129.504,492H66.716v-90.204
			c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z M287.985,492h-62.788V317.825
			c0-3.795,3.087-6.882,6.882-6.882h49.024c3.794,0,6.882,3.087,6.882,6.882V492z M446.466,492h-62.788V173.536
			c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z"/>
	</g>
</g>
<g>
	<g>
		<path d="M466.442,10.516c0.14-2.729-0.82-5.504-2.904-7.588c-2.084-2.084-4.859-3.045-7.588-2.904
			C455.789,0.017,455.63,0,455.466,0h-60.5c-5.523,0-10,4.477-10,10s4.477,10,10,10h37.357l-98.857,98.858l-37.28-37.28
			c-1.875-1.875-4.419-2.929-7.071-2.929c-2.652,0-5.196,1.054-7.071,2.929l-179.769,179.77c-3.905,3.905-3.905,10.237,0,14.143
			c1.953,1.951,4.512,2.927,7.071,2.927s5.119-0.976,7.071-2.929L289.115,102.79l37.28,37.28c3.905,3.905,10.237,3.905,14.143,0
			L446.466,34.143v33.81c0,5.523,4.477,10,10,10s10-4.477,10-10V11C466.466,10.837,466.449,10.678,466.442,10.516z"/>
	</g>
</g>
<g>
	<g>
		<circle cx="75.64" cy="303.31" r="10"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
              <div>
              @if( $ldate  === '06')
                <span class="tx-11 tx-white-6">Junio</span>
                @elseif( $ldate  === '07')
                <span class="tx-11 tx-white-6">Julio</span>
                @elseif( $ldate  === '08')
                <span class="tx-11 tx-white-6">Agosto</span>
                @elseif( $ldate  === '09')
                <span class="tx-11 tx-white-6">Septiembre</span>
                @endif

                <h3 class="mg-b-0 tx-white tx-lato tx-bold">N° {{$ordercount}}</h3>
                </div>
            </div><!-- card-body -->
            <div class="d-flex flex-row align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              <div>
                <span class="tx-11 tx-white-6">VENTAS POR MES SIN SISTEMA</span>
              </div>
              <div>
              @if( $ldate1 === 05)
                <span class="tx-11 tx-white-6">Mayo</span>
                @elseif( $ldate1  === 06)
                <span class="tx-11 tx-white-6">Junio</span>
                @elseif( $ldate1  === 07)
                <span class="tx-11 tx-white-6">Julio</span>
                @endif
                <h6 class="tx-white mg-b-0">N° 30</h6>
              </div>
            </div><!-- -->
          </div><!-- card -->
        </div><!-- col-3 -->
        <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
          <div class="card pd-20 bg-sl-primary">
            <div class="d-flex justify-content-between align-items-center mg-b-10">
              <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Ganancia Bruta de Este Mes</h6>
              <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
            </div><!-- card-header -->
            <div class="d-flex align-items-center justify-content-between">
            <svg version="1.1" id="Layer_1"  width="65" height="65" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 65 65" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M488.399,492h-21.933V173.536c0-14.823-12.06-26.882-26.882-26.882H390.56c-14.823,0-26.882,12.06-26.882,26.882V492
			h-55.692V317.825c0-14.823-12.059-26.882-26.882-26.882H232.08c-14.823,0-26.882,12.06-26.882,26.882V492h-55.692v-90.204
			c0-14.823-12.06-26.882-26.882-26.882H73.599c-14.823,0-26.882,12.06-26.882,26.882V492H23.601c-5.523,0-10,4.477-10,10
			s4.477,10,10,10h464.798c5.523,0,10-4.477,10-10S493.922,492,488.399,492z M129.504,492H66.716v-90.204
			c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z M287.985,492h-62.788V317.825
			c0-3.795,3.087-6.882,6.882-6.882h49.024c3.794,0,6.882,3.087,6.882,6.882V492z M446.466,492h-62.788V173.536
			c0-3.795,3.087-6.882,6.882-6.882h49.024c3.795,0,6.882,3.087,6.882,6.882V492z"/>
	</g>
</g>
<g>
	<g>
		<path d="M466.442,10.516c0.14-2.729-0.82-5.504-2.904-7.588c-2.084-2.084-4.859-3.045-7.588-2.904
			C455.789,0.017,455.63,0,455.466,0h-60.5c-5.523,0-10,4.477-10,10s4.477,10,10,10h37.357l-98.857,98.858l-37.28-37.28
			c-1.875-1.875-4.419-2.929-7.071-2.929c-2.652,0-5.196,1.054-7.071,2.929l-179.769,179.77c-3.905,3.905-3.905,10.237,0,14.143
			c1.953,1.951,4.512,2.927,7.071,2.927s5.119-0.976,7.071-2.929L289.115,102.79l37.28,37.28c3.905,3.905,10.237,3.905,14.143,0
			L446.466,34.143v33.81c0,5.523,4.477,10,10,10s10-4.477,10-10V11C466.466,10.837,466.449,10.678,466.442,10.516z"/>
	</g>
</g>
<g>
	<g>
		<circle cx="75.64" cy="303.31" r="10"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    @php
                     $ordersum = $orders->sum('total');
                     @csrf
                     @endphp

                <div>
                     @if( $ldate  === '06')
                <span class="tx-11 tx-white-6">Junio</span>
                @elseif( $ldate  === '07')
                <span class="tx-11 tx-white-6">Julio</span>
                @elseif( $ldate  === '08')
                <span class="tx-11 tx-white-6">Agosto</span>
                @elseif( $ldate  === '09')
                <span class="tx-11 tx-white-6">Septiembre</span>
                @endif
              <h3 class="mg-b-0 tx-white tx-lato tx-bold">S/.{{ $ordersum }}</h3>
              </div>
            </div><!-- card-body -->
            <div class="d-flex flex-row align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              <div>
                <span class="tx-11 tx-white-6">GANANCIA POR MES SIN SISTEMA </span>
              </div>
              <div>
              @if( $ldate1  === 05)
                <span class="tx-11 tx-white-6">Mayo</span>
                @elseif( $ldate1  === 06)
                <span class="tx-11 tx-white-6">Junio</span>
                @elseif( $ldate1  === 07)
                <span class="tx-11 tx-white-6">Julio</span>
                @endif
                <h6 class="tx-white mg-b-0">S./1200</h6>

              </div>

            </div><!-- -->
          </div><!-- card -->
        </div><!-- col-3 -->
        <center>
        <img id="logo" src="{{ asset('fontend') }}/img/download.png" width="1000" style="background-color: white;
            margin-left: 180px;
            margin-top: 20px;" alt="Logo">
        </center>
      </div><!-- row -->

    </div><!-- sl-pagebody -->

  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->




@endsection

