<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navigation">
                    <nav class="navbar navbar-expand-lg nav-bg">
                        <a class="navbar-brand" href="{{ url('user') }}">AFQIS</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/user') }}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="modal" data-target="#myModal">How It Works</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn" style="cursor: pointer;" data-toggle="modal" data-target="#contact_modal" >Contact</a>
                                </li>
                            </ul>


                                <a href="" class="btn-light btn btn-sm" onclick="event.preventDefault(); document.getElementById('user_logout').submit();">logout</a>
                                <form action="{{ route('user.logout') }}" method="post" id="user_logout">
                                    @csrf
                                </form>

                        </div>

{{--                        <div class="dropdown">--}}
{{--                            <button class="btn bg-white  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                {{$register[0]->user_name }}--}}
{{--                            </button>--}}
{{--                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                <a class="dropdown-item" href="{{ url('/') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}
{{--                                <form id="logout-form" action="{{ url('/') }}" method="POST" style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                    </nav>
                </div>


            </div>





        </div>
    </div>
</header>
