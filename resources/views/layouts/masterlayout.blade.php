<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>AskMate with Laravel</title>
</head>
<body>
<header>
    <div class="px-3 py-2 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <h2>AskMate with Laravel</h2>
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="#" class="nav-link text-secondary">
                            <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                            Home
                        </a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
        <div class="container d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <a href="/question/create" button class="btn btn-primary">Add new Question</a>
                <!---<a href="login.php" button class="btn btn-primary">Login</a>-->
                <!---<a href="register.php" button class="btn btn-primary">Register</a>-->
            </div>
        </div>
    </div>
</header>
<body>
        
        
        
        @yield('content')


</body>
</html>