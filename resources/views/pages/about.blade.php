@extends('layouts.app')

@section('title', 'About IST')

@section('content')

<!-- =============== FULL-WIDTH HERO =============== -->
<div 
    class="w-full h-[70vh] bg-center bg-cover bg-no-repeat flex items-center justify-center relative"
    style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjW8Kv4GSaHl_CiQOCLCKgHhKWJHTyMSzayrPBXmcpGH9pKCTj');"
>
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Text -->
    <div class="relative text-center text-white px-4 max-w-3xl">
        <h1 class="text-4xl md:text-5xl font-bold">About IST</h1>
    </div>
</div>
<!-- =============== END HERO =============== -->


<!-- ==================== WELCOME SECTION (FULL WIDTH LIKE IST) ==================== -->
<div class="py-5" style="background: #ffffff;">
    <div class="container px-5">
        <div class="row align-items-center">

            <!-- LEFT SIDE (TITLE + TEXT) -->
            <div class="col-lg-6 mb-4">
                <h2 class="fw-bold mb-3" style="font-size: 32px;">
                    Welcome to Institute of Software Technologies
                </h2>

                <p class="text-secondary" style="font-size: 17px; line-height: 1.7;">
                    Institute of Software Technologies Limited was a Department under Software Technologies
                    Limited since its establishment in 1991, registered on 21st November 2004.
                    Our center includes 20 well-equipped training labs that can accommodate up to
                    200 students at a time.
                </p>
            </div>

            <!-- RIGHT SIDE (VIDEO) -->
            <div class="col-lg-6 mb-4 d-flex justify-content-center">
                <div class="ratio ratio-16x9 shadow rounded overflow-hidden" style="width: 100%; max-width: 600px;">
                    <iframe 
                        src="https://www.youtube.com/embed/7bC9IsnEv5k?si=mlCCU9KCGtJ_Ob1C"
                        title="YouTube video"
                        allowfullscreen
                        style="border: 0;">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ==================== WHO WE ARE SECTION ==================== -->
<div class="py-5 bg-white">
    <div class="container px-5">
        <div class="row align-items-center">

            <!-- LEFT: Image -->
            <div class="col-lg-6 mb-4">
                <img 
                    src="https://www.isteducation.com/ist-content/uploads/2024/11/5025-1536x861.jpg"
                    alt="Who we are"
                    class="img-fluid rounded shadow"
                    style="border-radius: 12px;"
                >
            </div>

            <!-- RIGHT: Text -->
            <div class="col-lg-6 mb-4">
                <h2 class="fw-bold mb-3">Who we are</h2>

                <p style="font-size: 17px; line-height: 1.7;" class="text-secondary">
                    Founded on the principles of quality, innovation, and community impact,
                    IST provides comprehensive training programs tailored to the dynamic
                    demands of the global tech industry.
                </p>

                <p style="font-size: 17px; line-height: 1.7;" class="text-secondary">
                    Our institution is recognized for its practical, hands-on approach to
                    learning, equipping students with the tools and expertise to excel in
                    diverse IT disciplines.
                </p>
            </div>

        </div>
    </div>
</div>


@endsection
