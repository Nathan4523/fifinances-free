<!-- Top Bar -->
<nav class="navbar" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('images/logo/logo-ff-reduzido.svg')}}" alt="Logo index" class="logo-header-small">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                {{-- <li class="li-calender">
                    <a href="{{url('calendario')}}">
                        <i class="material-icons">event</i>
                        <p>Calendário</p>
                    </a>
                </li> --}}
                <li class="li-my-account">
                    <a href="{{route('my_account')}}">
                        <i class="material-icons">person_outline</i>
                        <p>Minha conta</p>
                    </a>
                </li>
                <li class="pull-right li-hours">
                    <div class="clock"></div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section id="sidebar-left">
    <aside id="leftsidebar" class="sidebar">
        <div class="user-info">
            <div class="image">
                <img src="{{Auth::user()->imagem}}" width="48" height="48" alt="User" />
                <div class="name-profile">{{ Auth::user()->name }}</div>
            </div>
            <div class="info-container">
                <div class="email">{{ Auth::user()->email }}</div>
            </div>
        </div>

        <!--Iten - Menu -->
        <div class="menu">
            <ul class="list">
                <li>
                    <a href="{{route('home')}}">
                        <i class="material-icons">home</i>
                        <span>Página inicial</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('cost')}}">
                        <i class="material-icons">shopping_cart</i>
                        <span>Despesas</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('yield')}}">
                        <i class="material-icons">
                            attach_money
                            </i>
                        <span>Rendimento Variável</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('annotations')}}">
                        <i class="material-icons">description</i>
                        <span>Anotações</span>
                    </a>
                </li>

                <li>
                    <a href="#" onclick="embreve();">
                            {{-- <a href="{{route('reports')}}"> --}}
                        <i class="material-icons">trending_up</i>
                        <span>Relatórios</span>
                    </a>
                </li>

                <hr>

                <li>
                    <a href="{{url('configuracao')}}">
                        <i class="material-icons">settings</i>
                        <span>Configuração</span>
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        <i class="material-icons">power_settings_new</i>
                        <span>Sair</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </aside>
</section>