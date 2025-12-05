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

                <li><a href="#">HOME</a></li>
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