    <header class="rb-header shadow-sm sticky-top bg-white">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="./index.php">
                    <img src="./images/royal_builders_logo.png" alt="Royal Builders logo" class="rb-logo me-2" />
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#rbOffcanvas" aria-controls="rbOffcanvas" aria-label="Toggle navigation">
                    <div class="menu-icon">
                        <span></span>
                        <span style="margin-left: 10px;"></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse d-none d-lg-flex" id="rbNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <li><a class="dropdown-item" href="./about-us.php">About Us</a></li>
                                <li><a class="dropdown-item" href="./management-team.php">Our Management</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./project.php">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact-us.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="rbOffcanvas"
                    aria-labelledby="rbOffcanvasLabel">
                    <div class="offcanvas-header">
                        <img src="./images/royal_builders_logo.png" alt="Royal Builders logo" class="rb-logo" />
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link py-3 border-bottom" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle py-3 border-bottom" href="#" id="aboutDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    About Us
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                    <li><a class="dropdown-item" href="./about-us.php">About Us</a></li>
                                    <li><a class="dropdown-item" href="./management-team.php">Our Management</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-3 border-bottom" href="./services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-3 border-bottom" href="./project.php">Project</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-3" href="./contact-us.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>