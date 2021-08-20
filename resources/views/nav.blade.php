

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}">Homepage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dondeEstamos') }}">Donde estamos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('paginaDeContacto') }}">Pagina de contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('quienesSomos') }}">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('aboutUs') }}" tabindex="-1" aria-disabled="true">About us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>