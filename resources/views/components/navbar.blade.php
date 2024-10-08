<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="icon" href="{{ asset('assets/images/narlogo.png') }}" type="image/x-icon">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">24-2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'rundowns.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('rundowns.index') }}">Rundown</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'trainee.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('trainee.index') }}">Trainee List</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'trainer.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('trainer.index') }}">Trainer List</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'showTasks' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('showTasks') }}">Daily Tasks</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'showPermission' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('showPermission') }}">Permission</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'casesolve.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('casesolve.index') }}">Case Solving</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'bpprojects.index' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('bpprojects.index') }}">BP Project</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'showForum' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('showForum') }}">Forum</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'showAcq' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('showAcq') }}">Acquaintance</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'showPresentation' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('showPresentation') }}">Presentation</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'showCatering' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('showCatering') }}">Catering</a>
                </li>
            </ul>
        <ul class="navbar-nav navbar-nav-no-margin">
            <a class="nav-link" id="typed-text" style="color:white !important;"></a>
        </ul>
        </div>
    </nav>

    <div class="contents-filler" style="padding-top: 56px;">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var typed = new Typed('#typed-text', {
                strings: ["Semangat!", "Yuk bisa yuk!","Kalau sedih, curhatnya ke angkatan ya !", "Lets go perfect core !!",
                    "Angkatan paling gacor", "Jangan TB TB", "24-2 Pasti semua lulus", "Jangan lupa saling bantu",
                    "Peduli angkatannya kak !!", "Jangan Quit ya ^^", "Jangan ngemeng kak", "Fokus Kak"
                ],
                typeSpeed: 40,
                backSpeed: 20,
                loop: true,
                showCursor: false
            });
        });
    </script>
</body>

</html>
