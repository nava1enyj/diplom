@php
    use Illuminate\Support\Facades\Auth;
@endphp

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid ms-xl-5 me-xl-5 me-lg-0 ms-lg-0 pt-1 pb-1">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"
                     class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3 me-3">
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('home') }}" aria-current="page"
                           href="{{ route('home') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('news') }}" aria-current="page" href="{{ route('news') }}">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_link('records') }}" aria-current="page"
                           href=" {{route('records')}} ">Рекорды</a>
                    </li>

                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 ms-3 me-3">
                    @if(Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('/storage/' . Auth::user()->avatar) }}"
                                     class="rounded-circle img-header me-2"
                                     alt="">
                                {{ Auth::user()->login }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('user.profile') }}">Личный кабинет</a></li>
                                <li><a class="dropdown-item text-danger" href=" {{route('user.logout')}} ">Выход</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ active_link('user.login') }}" aria-current="page"
                               href=" {{route('user.login')}}">Вход</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_link('user.register') }}" aria-current="page"
                               href=" {{route('user.register')}}">Регистрация </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
