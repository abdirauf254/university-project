@extends('layouts.app')

@section('title', 'career-opportunities')

@section('content')


<!-- =============== FULL-WIDTH HERO =============== -->
<div 
    class="w-full h-[70vh] bg-center bg-cover bg-no-repeat flex items-center justify-center relative"
    style="background-image: url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQbgcdZn3Vyu3sGBSXApJolQRi1-QSiyPYivszaEvBnhKsCTzrm');"
>
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Text -->
    <div class="relative text-center text-white px-4 max-w-3xl">
        <h1 class="text-4xl md:text-5xl font-bold">Career Opportunities</h1>
    </div>
</div>
<!-- =============== END HERO =============== -->

<div class="container py-5">

    <div class="row g-5">

        <!-- LEFT SIDE -->
        <div class="col-md-6">

            <h4 class="fw-bold mb-4">Software Development Trainer</h4>

            <!-- Bootstrap Accordion -->
            <div class="accordion" id="careerAccordion">

                <!-- ROLE -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="roleHeading">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#roleCollapse" aria-expanded="true">
                            Role
                        </button>
                    </h2>
                    <div id="roleCollapse" class="accordion-collapse collapse show"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            The Software Development Trainer will be a champion of creativity and
                            innovation by imparting technical concepts to students using a diverse
                            set of training material.
                        </div>
                    </div>
                </div>

                <!-- REPORTING -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="reportingHeading">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#reportingCollapse">
                            Reporting
                        </button>
                    </h2>
                    <div id="reportingCollapse" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            This position reports to the Head of Training.
                        </div>
                    </div>
                </div>

                <!-- SALARY -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="salaryHeading">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#salaryCollapse">
                            Salary
                        </button>
                    </h2>
                    <div id="salaryCollapse" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            Competitive and negotiable based on experience.
                        </div>
                    </div>
                </div>

                <!-- DUTIES -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="dutiesHeading">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#dutiesCollapse">
                            Duties & Responsibilities
                        </button>
                    </h2>
                    <div id="dutiesCollapse" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            <ul>
                                <li>Teach programming concepts</li>
                                <li>Prepare course materials</li>
                                <li>Assess student performance</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- SKILLS -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="skillsHeading">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#skillsCollapse">
                            Skills & Qualifications
                        </button>
                    </h2>
                    <div id="skillsCollapse" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            <ul>
                                <li>Strong programming knowledge</li>
                                <li>Good communication skills</li>
                                <li>Training or teaching experience</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- RIGHT SIDE IMAGE -->
        <div class="col-md-6 text-center">
            <img src="https://www.isteducation.com/ist-content/uploads/2025/06/Software-Development-Trainerrrr-768x768.png" class="img-fluid rounded shadow">
        </div>

    </div>

</div>


@endsection