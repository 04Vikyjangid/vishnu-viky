<div class="container-fluid">
    <div class="header navbar-toggle bg-black">
        <nav id="navbar_top" class="navbar navbar-expand-lg bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="/LINKUS SOLUTION/index.php">
                    <img src="./media/images/LINKUSLOGO.png" alt="LOGO" id="logo">
                </a>
                <button class="navbar-toggler bg-dark text-white border-white" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                    <span class="navbar-toggler-icon">...</span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav menu-li ff-raleway ">
                        <li class="nav-item mx-3">
                            <a class="nav-link <?php if($pageTitle=='Home'){echo 'active';}?>" aria-current="page" href="./index.php">HOME</a>
                        </li>
                        <li class="nav-item mx-3 ">
                            <a class="nav-link <?php if($pageTitle=='About_Us'){echo 'active';}?>" href="./about_us.php">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle <?php if($pageTitle=='Our Services'){echo 'active';}?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item <?php if($pageTitle=='Our Services'){echo 'active';}?>" href="./services.php">RPO</a></li>
                                <li><a class="dropdown-item <?php if($pageTitle=='Our Services'){echo 'active';}?>" href="./services.php">Digital Marketing</a></li>
                                <li><a class="dropdown-item <?php if($pageTitle=='Our Services'){echo 'active';}?>" href="./services.php">Training & Development</a></li>
                                <li><a class="dropdown-item <?php if($pageTitle=='Our Services'){echo 'active';}?>" href="./services.php">Payroll Handeling</a></li>
                                <li><a class="dropdown-item <?php if($pageTitle=='Our Services'){echo 'active';}?>" href="./services.php">Couselling</a></li>
                                <li><a class="dropdown-item <?php if($pageTitle=='Our Services'){echo 'active';}?>" href="./services.php">Corporate Events</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link <?php if($pageTitle=='Contact_Us'){echo 'active';}?>" href="./contact_us.php">CONTACT US</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link <?php if($pageTitle=='Login & Sign up'){echo 'active';}?>" href="./login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>