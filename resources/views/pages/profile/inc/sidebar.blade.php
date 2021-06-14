<div class="card" style="width: 18rem;">
<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle"  style= "margin-left: 90px;
    margin-top: 10px;
    margin-bottom: 10px;" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
    <ul class="list-group list-group-flush">
      <a href="{{ route('home') }}" class="btn btn-primary btn-sm btn-block">Home</a>
      <a href="{{ route('user.order') }}" class="btn btn-primary btn-sm btn-block">Mis Pedidos</a>
      <a   class="btn btn-danger btn-sm btn-block" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
    </ul>
  </div>
