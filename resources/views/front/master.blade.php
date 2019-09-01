<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}" >
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--Style CSS-->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <!--Script-->
    <script src="{{ asset('front/js/jquery-3.4.1.min.js') }}"></script>

    <title>@yield('title')</title>
</head>
<body>
<!-- ~~ Header Start~~ -->
<section id="header">
    @include('front.include.header')
</section>
<!-- ~~ Header End~~ -->

{{--home content start--}}

@yield('content')

{{--home content end--}}

<!-- contact modal -->
<div id="contact_modal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="max-width: 800px;">
        <!-- Modal content-->
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Fill This Field </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->

            <div class="modal-body">
                <!-- ~~ Signup Learn Start~~ -->
                <section id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-8">
                                <div class="contact">
                                    <h2>Contact Us:</h2>
                                    <form>
                                        <table>
                                            <tr>
                                                <td class="label">Your Message:</td>
                                                <td><textarea cols="40" rows="6"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td class="label">Name:</td>
                                                <td><input type="text" name="fname" placeholder="First Name"> <input type="text" name="lname" placeholder="Last Name"> </td>
                                            </tr>
                                            <tr>
                                                <td class="label">Cell No:</td>
                                                <td><input type="text" name="miuId"></td>
                                            </tr>
                                            <tr>
                                                <td class="label">E-mail:</td>
                                                <td><input type="email" name="email"></td>
                                            </tr>
                                            <tr class="label">
                                                <td>Password:</td>
                                                <td><input type="password" name="password"></td>
                                            </tr>
                                            <tr>
                                                <td class="label">Retype Password:</td>
                                                <td><input type="password" name="rpassword"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="submit" name="send" value="Send"></td>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- contact modal end-->

<!-- ~~ Footer Part Start ~~ -->
@include('front.include.footer')
<!-- ~~ Footer Part End ~~ -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/script.js') }}"></script>
</body>
</html>