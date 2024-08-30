<header class="mb-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 me-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('cartoons.index')  }}">Главная</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Каталог
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/cartoons"> Все </a></li>
                            @foreach($categories as $category)
                                <li><a class="dropdown-item"
                                       href="{{route('categories.show', ['category' => $category->id])}}">
                                        {{$category->title}}
                                    </a></li>
                            @endforeach
                        </ul>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('dashboard')  }}" role="button"
                                   data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    {{ $user->name }}
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/profile"> Профиль </a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')" class="dropdown-item ps-3"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Выйти') }}
                                            </x-dropdown-link>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <a class="nav-link " aria-current="page" href="{{ route('login')  }}">
                                Войти
                            </a>
                            @if (Route::has('register'))
                                <a class="nav-link" aria-current="page" href="{{ route('register')  }}">
                                    Регистрация
                                </a>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

