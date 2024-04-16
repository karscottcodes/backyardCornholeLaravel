<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
  <div class="col-md-3 mb-2 mb-md-0">
    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
      <img src="{{ asset('/imgs/logo_colour.svg') }}">
    </a>
  </div>

  <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="{{route("players.index")}}" class="nav-link px-2">Players</a></li>
    <li><a href="{{route("teams.index")}}" class="nav-link px-2">Teams</a></li>
    <li><a href="{{route("results.index")}}" class="nav-link px-2">Results</a></li>
  </ul>
</header>