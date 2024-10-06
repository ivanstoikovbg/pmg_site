<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border: 1px solid #ddd;">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/mg-yambol-logo-menu.png') }}" alt="Лого" class="img-fluid"></a>
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Начало <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/news">Новини</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    За нас
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/history">История</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Нашата гордост</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Изяви и успехи</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/teachers">Преподаватели</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/gallery">Галерия</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Документи
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('category.show', 'Дейността на гимназията') }}">Дейността на гимназията</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category.show', 'Предоставяни обществени услуги') }}">Предоставяни обществени услуги</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category.show', 'Профил на купувача') }}">Профил на купувача</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category.show', 'Стипендии') }}">Стипендии</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category.show', 'Бюджет') }}">Бюджет</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('category.show', 'Учебни Планове') }}">Учебни Планове</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/specialties">Специалности</a>
            </li>
        </ul>
    </div>
</nav>
