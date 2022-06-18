<!-- Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                    <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>090-080-0760</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="right-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="home">
                <h2>Finance Business</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item <?= $this->uri->segment(1) == 'home' ||
                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <a class="nav-link <?= $this->uri->segment(1) == 'home' ||
                                                $this->uri->segment(1) == '' ? 'active' : '' ?>" href="home">Home
                            <!-- <span class="sr-only">(current)</span> -->
                        </a>
                    </li>

                    <li class="nav-item <?= $this->uri->segment(1) == 'user_about' ||
                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <a class="nav-link <?= $this->uri->segment(1) == 'user_about' ||
                                                $this->uri->segment(1) == '' ? 'active' : '' ?>" href="user_about">About Us</a>
                    </li>

                    <li class="nav-item <?= $this->uri->segment(1) == 'user_services' ||
                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <a class="nav-link <?= $this->uri->segment(1) == 'user_services' ||
                                                $this->uri->segment(1) == '' ? 'active' : '' ?>" href="user_services">Our Services</a>
                    </li>

                    <li class="nav-item <?= $this->uri->segment(1) == 'user_contact' ||
                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <a class="nav-link <?= $this->uri->segment(1) == 'user_contact' ||
                                                $this->uri->segment(1) == '' ? 'active' : '' ?>" href="user_contact">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- /Header -->