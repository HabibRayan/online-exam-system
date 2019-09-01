<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="navigation">
                    <nav class="navbar navbar-expand-lg nav-bg">
                        <a class="navbar-brand" href="index.html">AFQIS</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#howWork">How It Works</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#future">Future Plans</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn" style="cursor: pointer;" data-toggle="modal" data-target="#contact_modal" >Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="topbar-right float-right">
                    <a href="{{ url('/register') }}">Join for free</a>
                    <a href="{{ url('/login') }}">Log in</a>
                </div>
            </div>
        </div>
    </div>
</header>
