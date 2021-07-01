<!-- Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <ul class="left-info">
                    <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 09:00-17:00</a></li>
                    <li><a href="tel:+41763488567"><i class="fa fa-phone"></i>+41 716 220 155</a></li>
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
            <a class="navbar-brand" href="index.php">
                <h2>TC Holding AG</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            $page = basename($_SERVER['PHP_SELF']);
            switch ($page) {
                case 'index.php':
            ?>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.php">Our Services</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <?php break; ?>
                <?php
                case 'about.php': ?>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home

                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="about.php">About Us</a>
                                <span class="sr-only">(current)</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.php">Our Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <?php break; ?>
                <?php
                case 'contact.php': ?>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.php">Our Services</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                                <span class="sr-only">(current)</span>
                            </li>
                        </ul>
                    </div>
                    <?php break; ?>
                <?php
                case 'services.php': ?>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>

                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="services.php">Our Services</a>
                                <span class="sr-only">(current)</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>

                            </li>
                        </ul>
                    </div>

                <?php break;
                default: ?>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.php">Our Services</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>

                            </li>
                        </ul>
                    </div>
            <?php } ?>
        </div>
    </nav>
</header>