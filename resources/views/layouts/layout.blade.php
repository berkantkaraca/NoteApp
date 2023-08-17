<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" />
    <title>NoteApp</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">

            <a href="/" class="navbar-brand">NoteApp</a>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="/notes" class="nav-link">Notes</a>
                </li>
                
            </ul>
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

                @if(session('isLogin'))
                    <li class="nav-item">
                        <a href="/account" class="nav-link">Welcome {{session('userName')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link">Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Register</a>
                    </li>
                @endif
                
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        @yield("content")
    </div>
</body>

</html>