<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" >
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--Style CSS-->
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <!--Script-->
    <script src="{{ asset('admin/js/jquery-3.4.1.min.js') }}"></script>

    <title>MIU Learner</title>
</head>
<body>
<!-- ~~ Header Start~~ -->
<section id="header">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg nav-bg">
                            <a class="navbar-brand" href="index.html">logo</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</section>
<!-- ~~ Header End~~ -->

<!-- ~~ Self Learn Start~~ -->
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="login">
                    <h2>Admin Login</h2>
                    <form action="{{ route('login')}}" method="POST">
                        @csrf
                        <table>
                            <tr>
                                <td class="label">Email:</td>
                                <td>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr class="label">
                                <td>Password:</td>
                                <td>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit" value="Login"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>


    </div>

</section>
<!-- ~~ Self Learn End~~ -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/script.js') }}"></script>
</body>
</html>