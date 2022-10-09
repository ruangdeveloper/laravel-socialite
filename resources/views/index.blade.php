<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Larasocial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-primary navbar-dark shadow py-4">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <h1 class="text-center btn-block">Larasocial</h1>
                <div class="card mt-5">
                    <div class="card-body">
                        @auth
                            <h4>Name: {{ auth('web')->user()->name }}</h4>
                            <h4>Email: {{ auth('web')->user()->email }}</h4>
                            <hr>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="btn btn-dark" type="submit">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('redirect') }}" class="btn btn-danger">Login With Google</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
