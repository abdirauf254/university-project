<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IST University – Welcome</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .navbar-custom {
            background: #b30000; /* red */
        }
        .course-card img {
            height: 200px;
            object-fit: cover;
        }
        .hero-overlay {
            background: rgba(0,0,0,0.55);
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
        }
        .hero-content {
    position: absolute;
    top: 40%;
    left: 25%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
    width: 80%;
    max-width: 700px;
}

    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="#">IST University</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#about" class="nav-link text-white">About</a></li>
                <li class="nav-item"><a href="#courses" class="nav-link text-white">Courses</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link text-white">Contact</a></li>
                <li class="nav-item"><a href="#register" class="nav-link btn btn-dark px-3 ms-3 text-white">Register</a></li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link btn btn-dark px-3 ms-3 text-white">
                         Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- SLIDER -->
<div id="heroSlider" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="4"></button>
    </div>

    <div class="carousel-inner">

     @php
$slides = [
    [
        "img"   => "https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80",
        "title" => "Congratulations Graduates",
        "text"  => "Celebrate your achievement — join our alumni of distinction."
    ],
    [
        "img"   => "https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80",
        "title" => "Campus Life & Community",
        "text"  => "Experience vibrant student life and make lifelong friends."
    ],
    [
        "img"   => "https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80",
        "title" => "Modern Learning Spaces",
        "text"  => "State-of-the-art lecture halls, digital library & smart classrooms."
    ],
    [
        "img"   => "https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80",
        "title" => "Your Success Starts Here",
        "text"  => "Get the skills and knowledge to build your future."
    ],
    [
        "img"   => "https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80",
        "title" => "Join a Diverse Community",
        "text"  => "Inclusive environment welcoming students from all backgrounds."
    ],
];
@endphp



        @foreach($slides as $k => $s)
        <div class="carousel-item {{ $k === 0 ? 'active' : '' }}">
            <img src="{{ $s['img'] }}" class="d-block w-100" style="height: 550px; object-fit: cover;">
            <div class="hero-overlay"></div>
            <div class="hero-content" data-aos="fade-right">
                <h1 class="fw-bold">{{ $s['title'] }}</h1>
                <p class="mt-2">{{ $s['text'] }}</p>
                <a href="{{ route('register') }}" class="btn btn-danger me-2">Register</a>
                <a href="{{ route('login') }}" class="btn btn-dark">Member Login</a>
            </div>
        </div>
        @endforeach

    </div>

    <button class="carousel-control-prev" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>


<!-- ABOUT SECTION -->
<style>
    /* Light blue background */
    .about-section {
        background: #e8f1f5;   /* exact IST light blue shade */
         padding: 80px 0;  /* Increase space top + bottom */
         margin-top: 80px; /* Extra spacing from slider/banner */
    }

    /* Title style */
    .about-title {
        font-size: 32px;
        font-weight: 700;
        color: #c40022; /* IST red tone */
        margin-bottom: 20px;
    }

    /* Paragraph style */
    .about-text {
        font-size: 17px;
        color: #333;
        line-height: 1.7;
        margin-bottom: 30px;
        max-width: 650px;
    }

    /* Red rounded IST button */
    .about-btn {
        display: inline-block;
        background: #e60023;
        color: white;
        padding: 12px 35px;
        border-radius: 30px;
        font-weight: 600;
        letter-spacing: .5px;
        transition: 0.3s ease;
        text-decoration: none;
    }

    .about-btn:hover {
        background: #c8001f;
        transform: translateY(-2px);
        box-shadow: 0px 4px 10px rgba(230, 0, 35, 0.3);
    }
</style>

<section class="about-section py-5">
    <div class="container">

        <div class="row justify-content-start">
            <div class="col-md-8">

                <h2 class="about-title">About Us</h2>

                <p class="about-text">
                    We are committed to providing students with individualized training 
                    through comprehensive, innovative, and high-quality vocational 
                    programs that prepare students for rewarding careers in rapidly 
                    increasing industries.
                </p>

                <a href="#" class="about-btn">MORE ABOUT US</a>

            </div>
        </div>

    </div>
</section>



<!----Become a 3D Painter--->

<style>
    /* Smooth fade-in for the image */
    .fade-in-left {
        opacity: 0;
        transform: translateX(-40px);
        animation: fadeInLeft 1.1s ease-out forwards;
    }

    @keyframes fadeInLeft {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Slide-in animation for the text */
    .slide-in-right {
        opacity: 0;
        transform: translateX(40px);
        animation: slideInRight 1.1s ease-out forwards;
        animation-delay: .2s;
    }

    @keyframes slideInRight {
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* Paragraph styling */
    .ist-text {
        font-size: 16px;
        color: #444;
        line-height: 1.7;
    }

    /* Red button styling */
    .ist-btn {
        background: #e60023;
        color: white;
        border-radius: 25px;
        padding: 10px 28px;
        font-size: 15px;
        font-weight: 600;
        transition: .3s;
    }

    .ist-btn:hover {
        background: #c8001f;
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(230, 0, 35, 0.35);
    }
</style>


<section class="py-5">
    <div class="container">

        <div class="row align-items-center">

            <!-- Left Image -->
            <div class="col-md-6 mb-4 mb-md-0 fade-in-left">
                <img src="https://www.isteducation.com/ist-content/uploads/2024/11/131734-768x512.jpg"
                     class="img-fluid shadow-sm"
                     style="border-radius:8px;">
            </div>

            <!-- Right Text -->
            <div class="col-md-6 slide-in-right">

                <h2 style="color:#e60023; font-weight:700;">
                    Become a 3D Printing Expert in Just Few Weeks
                </h2>

                <p class="ist-text">
                    3D printing is the future of manufacturing. It’s a revolutionary technology 
                    that allows you to create objects from digital designs. In this course, 
                    you’ll learn everything you need to know to get started with 3D printing.
                </p>

                <p class="ist-text">
                    By the end of this course, you’ll be able to 3D print anything you can imagine.
                </p>

                <a href="#" class="btn ist-btn">
                    MORE ABOUT 3D PRINTING
                </a>

            </div>

        </div>

    </div>
</section>
 

<!-----Certificate and Diploma Courses------>
  <style>
.courses-section {
    padding: 60px 0;
    background: #ffffff;
}

.section-title {
    text-align: left;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 40px;
    color: #d11a2a; /* same red as screenshot */
}

.cards-wrapper {
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
}

.course-card {
    width: 330px;
    background: #fff;
    border-radius: 8px;
    padding-bottom: 30px;
    box-shadow: 0 2px 7px rgba(0,0,0,0.15);
    transition: 0.3s;
}

.course-card:hover {
    transform: translateY(-5px);
}

.course-img {
    width: 100%;
    height: 210px;
    object-fit: cover;
    border-radius: 8px 8px 0 0;
}

.course-title {
    padding: 15px;
    font-size: 18px;
    font-weight: 700;
}

.course-text {
    padding: 0 15px;
    font-size: 14px;
    color: #444;
    line-height: 1.6;
}

.arrow-btn {
    width: 40px;
    height: 40px;
    border: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 15px;
    border-radius: 5px;
    text-decoration: none;
    color: black;
    font-size: 20px;
    transition: 0.3s;
}

.arrow-btn:hover {
    background: black;
    color: white;
}

</style>

<section class="courses-section">
    <div class="container">
        <h2 class="section-title">Certificate/ Diploma Courses</h2>

        <div class="cards-wrapper">

            {{-- Card 1 --}}
            <div class="course-card">
                <img src="https://www.isteducation.com/ist-content/uploads/2024/01/22937.jpg">
                
                <h3 class="course-title">Certificate in Cyber Security</h3>

                <p class="course-text">
                    00D 00H 00M 00S Duration 4 months <br>
                    Prerequisites: The student should be computer literate.
                    At least completed high school.
                </p>

                <a href="#" class="arrow-btn">&#8594;</a>
            </div>

            {{-- Card 2 --}}
            <div class="course-card">
                <img src="https://www.isteducation.com/ist-content/uploads/2024/01/2150061972.jpg">
                
                <h3 class="course-title">Certificate In Software Development</h3>

                <p class="course-text">
                    00D 00H 00M 00S Duration 2 Months <br>
                   00D 00H 00M 00S Duration 2 Months Prerequisites No Requirements Topics Standard ICDL Course  <br>
                    Customized ICDL Course for Workforce(You can choose from any…
                </p>

                <a href="#" class="arrow-btn">&#8594;</a>
            </div>

            {{-- Card 3 --}}
            <div class="course-card">
                <img src="https://www.isteducation.com/ist-content/uploads/2024/01/88601-1.jpg">
                
                <h3 class="course-title">Diploma In Cyber Security and Ethical Hacking</h3>

                <p class="course-text">
                    00D 00H 00M 00S Duration 12 months <br>
                    Must have done Linux & Certificate in Cyber Security.
                </p>

                <a href="#" class="arrow-btn">&#8594;</a>
            </div>

        </div>
    </div>
</section>


<!-- Short COURSES -->
<style>
.courses-section {
    padding: 60px 0;
    background: #ffffff;
}

.section-title {
    text-align: left;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 40px;
    color: #d11a2a; /* same red as screenshot */
}

.cards-wrapper {
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
}

.course-card {
    width: 330px;
    background: #fff;
    border-radius: 8px;
    padding-bottom: 30px;
    box-shadow: 0 2px 7px rgba(0,0,0,0.15);
    transition: 0.3s;
}

.course-card:hover {
    transform: translateY(-5px);
}

.course-img {
    width: 100%;
    height: 210px;
    object-fit: cover;
    border-radius: 8px 8px 0 0;
}

.course-title {
    padding: 15px;
    font-size: 18px;
    font-weight: 700;
}

.course-text {
    padding: 0 15px;
    font-size: 14px;
    color: #444;
    line-height: 1.6;
}

.arrow-btn {
    width: 40px;
    height: 40px;
    border: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 15px;
    border-radius: 5px;
    text-decoration: none;
    color: black;
    font-size: 20px;
    transition: 0.3s;
}

.arrow-btn:hover {
    background: black;
    color: white;
}

</style>

<section class="courses-section">
    <div class="container">
        <h2 class="section-title">Short Courses</h2>

        <div class="cards-wrapper">

            {{-- Card 1 --}}
            <div class="course-card">
                <img src="https://www.isteducation.com/ist-content/uploads/2023/04/3d-slide2-m-400x252-1.jpg">
                
                <h3 class="course-title">3D Printing</h3>

                <p class="course-text">
                    Course Overview 3D printing, also known as additive manufacturing (AM),<br>
                    refers to processes used to create a threedimensional object in
                </p>

                <a href="#" class="arrow-btn">&#8594;</a>
            </div>

            {{-- Card 2 --}}
            <div class="course-card">
                <img src="https://www.isteducation.com/ist-content/uploads/2022/04/ethical-hacking-2-400x252-1.png">
                
                <h3 class="course-title">Advanced Ethical Hacking </h3>

                <p class="course-text">
                    Course Overview This advance ethical <br> hacking course that is meant to be of practical experience to student, <br> it is to…
                </p>

                <a href="#" class="arrow-btn">&#8594;</a>
            </div>

            {{-- Card 3 --}}
            <div class="course-card">
                <img src="https://www.isteducation.com/ist-content/uploads/2022/02/4314674_bbf8.jpeg">
                
                <h3 class="course-title">Android Application<br> Development Advanced </h3>

                <p class="course-text">
                    Course Overview This course assumes <br> that you know (or can quickly learn) <br> the android application development <br> programming language. To take…
                </p>

                <a href="#" class="arrow-btn">&#8594;</a>
            </div>

        </div>
    </div>
</section>

<!-- Professional Training -->
<style>
.courses-section {
    padding: 60px 0;
    background: #ffffff;
}

.section-title {
    text-align: left;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 40px;
    color: #d11a2a; /* same red as screenshot */
}

.cards-wrapper {
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
}

.course-card {
    width: 330px;
    background: #fff;
    border-radius: 8px;
    padding-bottom: 30px;
    box-shadow: 0 2px 7px rgba(0,0,0,0.15);
    transition: 0.3s;
}

.course-card:hover {
    transform: translateY(-5px);
}

.course-img {
    width: 100%;
    height: 210px;
    object-fit: cover;
    border-radius: 8px 8px 0 0;
}

.course-title {
    padding: 15px;
    font-size: 18px;
    font-weight: 700;
}

.course-text {
    padding: 0 15px;
    font-size: 14px;
    color: #444;
    line-height: 1.6;
}

.arrow-btn {
    width: 40px;
    height: 40px;
    border: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 15px;
    border-radius: 5px;
    text-decoration: none;
    color: black;
    font-size: 20px;
    transition: 0.3s;
}

.arrow-btn:hover {
    background: black;
    color: white;
}

</style>

<section class="courses-section">
    <div class="container">
        <h2 class="section-title">Professional Training</h2>

        <div class="cards-wrapper">

            {{-- Card 1 --}}
            <div class="course-card">
                <img src="https://www.isteducation.com/ist-content/uploads/2022/04/3-400x252-1.jpg">
                
                <h3 class="course-title">Certified Ethical Hacker (CEH)</h3>

                <p class="course-text">
                  Course Overview This course will immerse you into <br> a “Hacker Mindset” in order to teach you how to think like
                </p>

                <a href="#" class="arrow-btn">&#8594;</a>
            </div>

            {{-- Card 2 --}}
            <div class="course-card">
                <img src="https://www.isteducation.com/ist-content/uploads/2022/04/Red-Hat-OpenStack-Administration-I-CL110-400x252-1.jpg">
                
                <h3 class="course-title">Computer Hacking  Forensic <br> Investigator (CHFI) </h3>

                <p class="course-text">
                    Course Overview This training covers detailed methodological approach to computer forensic and evidence analysis. It provides the necessary skillset for…

                <a href="#" class="arrow-btn">&#8594;</a>
            </div>

            {{-- Card 3 --}}
            <div class="course-card">
                <img src="https://www.isteducation.com/ist-content/uploads/2022/02/4063124_fd1d_4.jpeg">
                
                <h3 class="course-title">Cyber Security For Beginners </h3>

                <p class="course-text">
                    Course Overview This is a course guide for all cyber security beginners with the objective of giving level entry skill…
                </p>

                <a href="#" class="arrow-btn">&#8594;</a>
            </div>

        </div>
    </div>
</section>



<!-- TESTIMONIALS SECTION -->

<style>
    .testimonial-card {
        background: #000;
        color: #fff;
        border-radius: 8px;
        padding: 28px;
        position: relative;
        min-height: 220px;
    }

    .testimonial-card::after {
        content: "";
        position: absolute;
        left: 40px;
        bottom: -18px;
        width: 0;
        height: 0;
        border-left: 18px solid transparent;
        border-right: 18px solid transparent;
        border-top: 18px solid #000;
        
    }

    .testimonial-quote {
        font-size: 32px;
        color: #ffcc00;
    }

    .testimonial-stars {
        color: #ffcc00;
        font-size: 18px;
    }

    .carousel-indicators button {
        background-color: #ff3131 !important;   /* red like screenshot */
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 5%;
    }
</style>

<div class="container mb-4">
    <h2 style="color:#ff3131; font-weight:100; letter-spacing:1px; text-transform:capitalize;">
        testimonials
    </h2>
</div>



<div id="testimonialSlider" class="carousel slide" data-bs-ride="carousel">

    {{-- Pagination Dots --}}
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#testimonialSlider" data-bs-slide-to="2"></button>
    </div>


    <div class="carousel-inner">

        {{-- SLIDE 1 --}}
        <div class="carousel-item active">
            <div class="container">
                <div class="row g-4">

                    @foreach([
                        ['Munir Abdi','i.pravatar.cc/120?img=32','Started off having no IT knowledge...'],
                        ['Graciela Mimi','i.pravatar.cc/120?img=12','Very conducive environment for learning...'],
                        ['Walles Kotino','i.pravatar.cc/120?img=55','My experience has been the best...'],
                    ] as $t)

                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-quote">❝</div>
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="mt-2">{{ $t[2] }}</p>
                            <img src="https://cdn.iconscout.com/icon/free/png-256/free-google-logo-icon-svg-download-png-93413.png"
                                 width="26" class="position-absolute" style="right: 15px; bottom: 15px;">
                        </div>
                        <div class="text-center mt-4">
                            <img src="https://{{ $t[1] }}" class="rounded-circle mb-2" width="60">
                            <h6 class="fw-bold mb-0">{{ $t[0] }}</h6>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>


        {{-- SLIDE 2 --}}
        <div class="carousel-item">
            <div class="container">
                <div class="row g-4">

                    @foreach([
                        ['Amina Yusuf','i.pravatar.cc/120?img=47','Great environment and amazing staff...'],
                        ['Kevin Mark','i.pravatar.cc/120?img=28','I gained real skills that helped my career...'],
                        ['Sophia Njeri','i.pravatar.cc/120?img=5','Lecturers were really supportive and friendly...'],
                    ] as $t)

                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-quote">❝</div>
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="mt-2">{{ $t[2] }}</p>
                            <img src="https://cdn.iconscout.com/icon/free/png-256/free-google-logo-icon-svg-download-png-93413.png"
                                 width="26" class="position-absolute" style="right: 15px; bottom: 15px;">
                        </div>
                        <div class="text-center mt-4">
                            <img src="https://{{ $t[1] }}" class="rounded-circle mb-2" width="60">
                            <h6 class="fw-bold mb-0">{{ $t[0] }}</h6>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>


        {{-- SLIDE 3 --}}
        <div class="carousel-item">
            <div class="container">
                <div class="row g-4">

                    @foreach([
                        ['Brian Kimani','i.pravatar.cc/120?img=33','Hands-on practical lessons helped me a lot...'],
                        ['Daisy Wanjiru','i.pravatar.cc/120?img=18','A very supportive learning environment...'],
                        ['Thomas Kariuki','i.pravatar.cc/120?img=44','One of the best institutions for IT skills...'],
                    ] as $t)

                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-quote">❝</div>
                            <div class="testimonial-stars">★★★★★</div>
                            <p class="mt-2">{{ $t[2] }}</p>
                            <img src="https://cdn.iconscout.com/icon/free/png-256/free-google-logo-icon-svg-download-png-93413.png"
                                 width="26" class="position-absolute" style="right: 15px; bottom: 15px;">
                        </div>
                        <div class="text-center mt-4">
                            <img src="https://{{ $t[1] }}" class="rounded-circle mb-2" width="60">
                            <h6 class="fw-bold mb-0">{{ $t[0] }}</h6>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>

    </div>

    {{-- ARROWS --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#testimonialSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>


<!-- TRAINING PARTNERS --><
<section class="py-5" style="background:#111;">
    <div class="container text-center mb-4">
        <h2 style="color:rgb(247, 9, 9); font-weight:600;">Our Training Partners</h2>
    </div>

    <div id="partnersSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="hover">

        <!-- Pagination Dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#partnersSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#partnersSlider" data-bs-slide-to="1"></button>
        </div>

        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row g-4 justify-content-center">

                        @foreach([
                            "https://www.isteducation.com/ist-content/uploads/2022/02/9-300x152.jpeg",
                            "https://www.isteducation.com/ist-content/uploads/2022/02/2-300x152.jpeg",
                            "https://www.isteducation.com/ist-content/uploads/2022/02/7-300x152.jpeg",
                            "https://www.isteducation.com/ist-content/uploads/2022/02/8-300x152.jpeg",
                        ] as $logo)

                        <div class="col-md-3">
                            <div class="p-4 bg-white d-flex align-items-center justify-content-center shadow-sm"
                                 style="height:150px; border-radius:6px;">
                                <img src="{{ $logo }}" class="img-fluid" style="max-height:80px;">
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row g-4 justify-content-center">

                        @foreach([
                            "https://i0.wp.com/ldtraining.ac.uk/wp-content/uploads/2019/10/LDT-Logo-PNG-1.png?fit=2000%2C1000&ssl=1",
                            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_mK2ZUICb6R5ZJ6_UBxQ3YZe8U9XBSWY__gYWgV4t-E9UHjeOr1VVkcR0ezVbVSylsA&usqp=CAU",
                            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaRdoCM1sMiDWCxxpdSK_wYOgzxddWgtHC1Q&s",
                            "https://www.isteducation.com/ist-content/uploads/2022/02/6-300x152.jpeg",
                        ] as $logo)

                        <div class="col-md-3">
                            <div class="p-4 bg-white d-flex align-items-center justify-content-center shadow-sm"
                                 style="height:150px; border-radius:6px;">
                                <img src="{{ $logo }}" class="img-fluid" style="max-height:80px;">
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#partnersSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#partnersSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</section>

<!-- FOOTER -->

<style>
.site-footer {
    background: #000;
    color: #fff;
    padding: 60px 0 20px;
    font-family: Arial, sans-serif;
    margin-top: 80px;
}

.footer-container {
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-column {
    width: 30%;
    min-width: 250px;
}

.footer-title {
    color: #d11a2a;
    font-size: 20px;
    margin-bottom: 20px;
    font-weight: bold;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 12px;
    font-size: 15px;
    display: flex;
    align-items: center;
    color: white;
}

.footer-links li i {
    margin-right: 10px;
    color: #d11a2a;
}

.footer-links a {
    color: white;
    text-decoration: none;
}

.footer-links a:hover {
    color: #d11a2a;
}

.footer-bottom {
    margin-top: 30px;
    text-align: center;
    font-size: 14px;
    border-top: 1px solid #222;
    padding-top: 15px;
}
</style>

<footer class="site-footer">
    <div class="footer-container">

        {{-- Quick Links --}}
        <div class="footer-column">
            <h3 class="footer-title">Quick Links</h3>
            <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Career Opportunities</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div>

        {{-- Follow Us --}}
        <div class="footer-column">
            <h3 class="footer-title">Follow Us</h3>
            <ul class="footer-links">
                <li><i class="fab fa-facebook"></i> Facebook</li>
                <li><i class="fab fa-instagram"></i> Instagram</li>
                <li><i class="fab fa-twitter"></i> Twitter</li>
                <li><i class="fab fa-linkedin"></i> LinkedIn</li>
            </ul>
        </div>

        {{-- Contact Us --}}
        <div class="footer-column">
            <h3 class="footer-title">Contact Us</h3>
            <ul class="footer-links">
                <li><i class="fas fa-phone"></i> +254 739 944 882</li>
                <li><i class="fas fa-comment"></i> Whatsapp</li>
                <li><i class="fas fa-envelope"></i> info@isteducation.com</li>
                <li>
                    <i class="fas fa-location-arrow"></i>
                    Westpoint Building, 6th Floor,<br>
                    Mpaka Road, Westlands, Nairobi
                </li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        Copyright 2025 IST. All Rights Reserved.
    </div>
</footer>



<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>

</body>
</html>
