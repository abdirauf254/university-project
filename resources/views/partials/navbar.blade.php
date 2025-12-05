<style>
    /* TOP RED BAR */
.topbar {
    background: #d62828;
    color: white;
    padding: 8px 0;
    font-size: 14px;
}

.topbar-container {
    width: 90%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap; /* allows items to move on small screens */
    gap: 6px;
}

.left span {
    margin-right: 15px;
}

.login-link {
    color: white;
    text-decoration: none;
    font-weight: 600;
}

/* 🔥 MAKE IT RESPONSIVE */
@media (max-width: 768px) {
    .topbar-container {
        flex-direction: column;     /* stack items vertically */
        text-align: center;
    }

    .left span {
        display: block;             /* stack address + email */
        margin-bottom: 5px;
    }

    .right {
        margin-top: 5px;
    }
}

@media (max-width: 480px) {
    .topbar {
        font-size: 12px;            /* smaller text for small phones */
        padding: 6px 0;
    }

    .left span {
        font-size: 12px;
    }

    .login-link {
        font-size: 12px;
    }
}
    /* MAIN NAV */
.main-nav {
    color: white;
    border-bottom: 1px solid #ddd;
}

.nav-menu a:hover,
.nav-menu a:focus,
.nav-menu a.active {
    color: #f10909 !important;
}


.nav-container {
    width: 90%;
    margin: auto;
    display: flex;
    align-items: center;
    gap: 30px;
}

.logo { height: 60px; }

/* Ongoing Intakes */
.ongoing {
    position: relative;
    z-index: 9999; /* ensures dropdown stays above slider */
}

.ongoing > a {
    font-weight: 700;
    color: black;
    text-decoration: none;
    padding: 15px 10px;
    display: flex;
    align-items: center;
    gap: 6px;
    border: none !important;          /* remove any lines */
    box-shadow: none !important;
}

/* Simple Dropdown */
.simple-dropdown {
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    width: 180px;
    display: none;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    padding: 10px 0;
    border-radius: 4px;
    z-index: 99999; /* very high so slider cannot block it */
}

.simple-dropdown a {
    display: block;
    padding: 10px 15px;
    color: #333;
    text-decoration: none;
    font-weight: 500;
}

.simple-dropdown a:hover {
  
    color: white;
}

/* Show dropdown on hover */
.dropdown:hover .simple-dropdown {
    display: block;
}

/* Mobile fix */
@media (max-width: 900px) {
    .ongoing {
        width: 100%;
    }

    .ongoing > a {
        padding: 12px 0;
    }

    .simple-dropdown {
        position: static;   /* dropdown stays inside mobile menu */
        width: 100%;
        box-shadow: none;
        padding: 5px 0;
    }

    .simple-dropdown a {
        padding: 12px 10px;
        font-size: 14px;
    }
}

/* SIMPLE DROPDOWN */
.simple-dropdown {
    position: absolute;
    background: white;
    width: 180px;
    display: none;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    padding: 10px 0;
}

.dropdown:hover .simple-dropdown {
    display: block;
}

.nav-menu {
    list-style: none;
    display: flex;
    gap: 30px;
    margin-left: auto; /* pushes menu to the right */
}

.nav-menu li { position: relative; }
.nav-menu a { font-weight: 600; color: black; text-decoration: none; padding: 20px 0; }

/* MEGA MENU (Centered) */
.mega-menu {
    display: none;
    background: white;
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    width: 900px;
    padding: 25px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    z-index: 999;
}

.mega-dropdown:hover .mega-menu {
    display: block;
}

.mega-row { display: flex; justify-content: space-between; }
.mega-column a { display: block; padding: 6px 0; color: #444; }
.mega-column a:hover { color: #d62828; }

/* MOBILE */
.mobile-toggle {
    display: none;
    font-size: 26px;
    cursor: pointer;
    margin-left: auto;
}

@media(max-width: 900px) {

    .mobile-toggle {
        display: block;
    }

    .nav-menu {
        display: none;
        flex-direction: column;
        width: 100%;
        background: white;
        padding: 15px;
    }

    .nav-menu.show { display: block; }

    .mega-menu {
        position: static;
        transform: none;
        box-shadow: none;
        width: 100%;
    }

    .mega-row {
        flex-direction: column;
    }

    .ongoing {
        margin-left: auto;
    }
    
}
.ongoing a:hover,
.ongoing a:focus,
.ongoing a.active {
    color: #f10909 !important;
}
</style>

  <!-- NAVBAR -->
<header>

<!-- 🔴 TOP RED INFO BAR -->
<div class="topbar">
    <div class="topbar-container">
        <div class="left">
            <span><i class="fa fa-envelope"></i> info@isteducation.com</span>
            <span><i class="fa fa-map-marker"></i> Westpoint Building, Mpaka Road, Westlands, Nairobi</span>
        </div>

        <div class="right">
            <a href="{{ route('login') }}" class="login-link"><i class="fa fa-user"></i> Login/Registration</a>
        </div>
    </div>
</div>

    <!-- 🔵 MAIN NAV -->
    <nav class="main-nav">
        <div class="nav-container">

            <!-- LOGO -->
            <img src="https://www.isteducation.com/ist-content/uploads/2022/02/cropped-IST-logo-01-2048x2048-1-2.png"
                class="logo" alt="IST Logo">

            <!-- Ongoing Intakes (next to logo) -->
            <div class="ongoing dropdown">
                <a href="#"><i class="fa fa-th"></i> ONGOING INTAKES</a>
                <div class="simple-dropdown">
                    <a href="{{ route('register') }}">Apply Now</a>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="mobile-toggle" onclick="toggleMenu()">
                <i class="fa fa-bars"></i>
            </div>

            <!-- NAV MENU -->
            <ul class="nav-menu" id="navMenu">

                <li><a href="/">HOME</a></li>
                <li><a href="{{ route('about') }}">ABOUT IST</a></li>

                <!-- CENTERED MEGA MENU -->
                <li class="dropdown mega-dropdown">
                    <a href="#">COURSES</a>

                    <div class="mega-menu">
                        <div class="mega-row">

                            <div class="mega-column">
                                <a href="#">Advanced Excel</a>
                                <a href="#">Graphic Design</a>
                                <a href="#">Certificate Courses</a>
                                <a href="#">Computer Programming</a>
                                <a href="#">Diploma Courses</a>
                                <a href="#">Short Courses</a>
                                <a href="#">CompTIA</a>
                            </div>

                            <div class="mega-column">
                                <a href="#">Cisco Networking</a>
                                <a href="#">Oracle Solaris</a>
                                <a href="#">MySQL Database</a>
                                <a href="#">Oracle Database 19c</a>
                                <a href="#">R12 Oracle E-Business Suite</a>
                                <a href="#">Other Red Hat Courses</a>
                                <a href="#">AWS</a>
                            </div>

                            <div class="mega-column">
                                <a href="#">Other Oracle Courses</a>
                                <a href="#">SUSE Linux Enterprise</a>
                                <a href="#">Red Hat Openshift</a>
                                <a href="#">Red Hat Ceph Storage</a>
                                <a href="#">Oracle App Development</a>
                                <a href="#">Red Hat OpenStack</a>
                                <a href="#">Project Management</a>
                            </div>

                        </div>
                    </div>

                </li>

                <li><a href="{{ route('careers') }}">CAREER OPPORTUNITIES</a></li>
                <li><a href="{{ route('contact') }}">CONTACT US</a></li>

            </ul>

        </div>
    </nav>

</header>
