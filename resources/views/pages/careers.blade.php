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

<!-- =============== Accordion Section =============== -->

<style>
    .custom-accordion .accordion-item {
        border-bottom: 1px solid #e5e5e5;
        border-top: 0;
        border-left: 0;
        border-right: 0;
    }

    .custom-accordion .accordion-button {
        background: #fff;
        font-weight: 600;
        padding: 18px 20px;
        font-size: 17px;
    }

    .custom-accordion .accordion-button:not(.collapsed) {
        color: #d40000 !important;
        border-left: 3px solid #d40000;
        background-color: #fff;
        box-shadow: none;
    }

    /* PLUS ICON */
    .custom-accordion .accordion-button::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='black' class='bi bi-plus-lg' viewBox='0 0 16 16'%3E%3Cpath d='M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2'/%3E%3C/svg%3E");
    }

    /* MINUS ICON */
    .custom-accordion .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='red' class='bi bi-dash-lg' viewBox='0 0 16 16'%3E%3Cpath d='M2 7.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5'/%3E%3C/svg%3E");
    }

    .accordion-body {
        font-size: 15px;
        line-height: 1.7;
    }
</style>

<div class="container py-5">
    <div class="row g-5">

        <!-- LEFT -->
        <div class="col-md-6">

            <div class="accordion custom-accordion" id="careerAccordion">

                <!-- 1. Software Development Trainer -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-1">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-1">
                            Software Development Trainer
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            The Institute of Software Technologies (IST) is the premier brand for IT-based professional
                            career development through competency and solution based training. The Institute invites
                            applications to fill the vacant position of Software Development Trainer.
                        </div>
                    </div>
                </div>

                <!-- 2. Role -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-2">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-2">
                            Role
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            The Software Development Trainer will be a champion of creativity and innovation by imparting
                            technical concepts to students using a diverse set of training material.
                        </div>
                    </div>
                </div>

                <!-- 3. Reporting -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-3">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-3">
                            Reporting
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            The trainer shall report to the Head of Training.
                        </div>
                    </div>
                </div>

                <!-- 4. Salary -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-4">
                            Salary
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            Ksh 50,000
                        </div>
                    </div>
                </div>

                <!-- 5. Duties and Responsibilities -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-5">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-5">
                            Duties and Responsibilities
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            Plan, prepare and deliver courses according to training plan.<br>
                            Provide individual or group training to students.<br>
                            Conduct trainings both at IST campus and offsite.<br>
                            Research and design training materials.<br>
                            Provide technical support for R&D.<br>
                            Ensure course materials are up to date.<br>
                            Write programs using modern languages.<br>
                            Develop testing and evaluation procedures.<br>
                            Support classroom culture.<br>
                            Prepare exam content and evaluate students.<br>
                            Many more duties as assigned…
                        </div>
                    </div>
                </div>

                <!-- 6. Skills -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-6">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-6">
                            Skills & Qualifications
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            • 1+ years’ experience in professional coding (HTML, CSS, JS, Laravel, Vue, React, Node).<br>
                            • Bachelor’s degree in a software development related course.<br><br>

                            <strong>Other Competencies:</strong><br>
                            • Good teamwork<br>
                            • Positive attitude<br>
                            • Flexibility<br>
                            • Problem-solving<br>
                            • Ability to mentor others
                        </div>
                    </div>
                </div>

                <!-- 7. How to Apply -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-7">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-7">
                            How to Apply
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            Send an UPDATED CV to <b>hr@stl-horizon.com</b> with the subject line:
                            <strong>Software Development Trainer</strong>.
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="col-md-6">
            <img src="https://www.isteducation.com/ist-content/uploads/2025/06/Software-Development-Trainerrrr-768x768.png"
                 class="img-fluid rounded shadow-sm w-100">
        </div>

    </div>
</div>

<!-- =============== Accordion Section part 2 =============== -->

<style>
    .custom-accordion .accordion-item {
        border-bottom: 1px solid #e5e5e5;
        border-top: 0;
        border-left: 0;
        border-right: 0;
    }

    .custom-accordion .accordion-button {
        background: #fff;
        font-weight: 600;
        padding: 18px 20px;
        font-size: 17px;
    }

    .custom-accordion .accordion-button:not(.collapsed) {
        color: #d40000 !important;
        border-left: 3px solid #d40000;
        background-color: #fff;
        box-shadow: none;
    }

    /* PLUS ICON */
    .custom-accordion .accordion-button::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='black' class='bi bi-plus-lg' viewBox='0 0 16 16'%3E%3Cpath d='M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2'/%3E%3C/svg%3E");
    }

    /* MINUS ICON */
    .custom-accordion .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='red' class='bi bi-dash-lg' viewBox='0 0 16 16'%3E%3Cpath d='M2 7.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5'/%3E%3C/svg%3E");
    }

    .accordion-body {
        font-size: 15px;
        line-height: 1.7;
    }
</style>

<div class="container py-5">
    <div class="row g-5">

        <!-- LEFT -->
        <div class="col-md-6">

            <div class="accordion custom-accordion" id="careerAccordion">

                <!-- 1. Receptionist -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-1">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-1">
                            Receptionist
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            The Institute of Software Technologies (IST) is the premier brand for IT-based professional
                            career development through competency and solution-based training. 
                            The Institute invites applications to fill the vacant position of a Receptionist
                        </div>
                    </div>
                </div>

                <!-- 2. Role -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-2">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-2">
                            Role
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            The Receptionist is the first point of contact for students, staff, visitors, and external
                            stakeholders. The role involves managing the front office, handling inquiries, maintaining
                            records, and overseeing student bag storage to ensure orderliness and security.
                        </div>
                    </div>
                </div>

                <!-- 3. Reporting -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-3">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-3">
                            Reporting
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                           The Receptionist shall report to the Centre Manager.
                        </div>
                    </div>
                </div>

                <!-- 4. Salary -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-4">
                            Salary
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            Ksh 35,000
                        </div>
                    </div>
                </div>

                <!-- 5. Duties and Responsibilities -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-5">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-5">
                            Duties and Responsibilities
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            Greet and assist students, staff, visitors, and prospective clients in a professional and courteous manner.<br>
                            Manage incoming calls, emails, and other communications, and direct them appropriately.<br>
                            Provide information about college programs, admissions, schedules, and general inquiries.<br>
                           Maintain a welcoming and organized reception area.<br>
                            Assist with filing, data entry, and record keeping of student and staff information when required.<br>
                            Support the admissions and academic teams with administrative tasks as required.<br>
                            Receive and distribute incoming mail, parcels, and deliveries.<br>
                            Oversee the storage and retrieval of student bags in the designated storage area.<br>
                            Report any security or safety concerns regarding student belongings.<br>
                            Support staff with preparation for events, exams, and student activities.<br>
                            Many more duties as assigned…
                        </div>
                    </div>
                </div>

                <!-- 6. Skills -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-6">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-6">
                            Skills & Qualifications
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            • Diploma/Certificate/Degree in any field related to Business Administration or Customer Service.<br>
                            • Previous experience as a receptionist or customer service representative is an added advantage<br>
                            • Basic computer proficiency (MS Office, email systems).<br><br>

                            <strong>Other Competencies:</strong><br>
                            • Excellent communication and interpersonal skills.<br>
                            • Strong organizational and multitasking ability<br>
                            • Integrity, discretion, and a friendly, approachable personality<br>
                            • Reliable and punctual, demonstrating consistency in attendance and timekeeping<br>
                        </div>
                    </div>
                </div>

                <!-- 7. How to Apply -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-7">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse-7">
                            How to Apply
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse"
                         data-bs-parent="#careerAccordion">
                        <div class="accordion-body">
                            Send an UPDATED CV to <b>hr@stl-horizon.com</b> with the subject line:
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="col-md-6">
            <img src="https://www.isteducation.com/ist-content/uploads/2025/08/HiringReceptionist-768x768.png"
                 class="img-fluid rounded shadow-sm w-100">
        </div>

    </div>
</div>

@endsection