<nav class="navbar navbar-expand-lg navbar-light navbar-background-color">
    <a class="navbar-brand" href="#">HPS - Social Network</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" style="margin-right: 30px">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>

        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="fas fa-power-off"></i>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</nav>
