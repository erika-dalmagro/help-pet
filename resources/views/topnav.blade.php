<div class="container  z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav mx-auto">
                            @if(Session::get('usuario'))
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{ route('pet.index') }}">
                                    <i class="fa fa-list opacity-6 text-dark me-1"></i>
                                    Listagem de Pets
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2 active" href="{{ route('pet.adicionar') }}">
                                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                    Cadastro de Pets
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2 active" href="{{ route('logout') }}">
                                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                    Logout
                                </a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{ route('pet.index') }}">
                                    <i class="fa fa-list opacity-6 text-dark me-1"></i>
                                    Listagem de Pets
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2 active" href="{{ route('auth.login') }}">
                                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                    Login
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>