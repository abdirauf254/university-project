@extends('layouts.app')

@section('title', 'career-opportunities')

@section('content')


<!-- =============== FULL-WIDTH HERO =============== -->
<div 
    class="w-full h-[70vh] bg-center bg-cover bg-no-repeat flex items-center justify-center relative"
    style="background-image: url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRjWDep6zkhmkxzEiyqpzWBgn4TOzk_g2oigJtI3e1R5MZab-Mk');"
>
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Text -->
    <div class="relative text-center text-white px-4 max-w-3xl">
        <h1 class="text-4xl md:text-5xl font-bold">Career Opportunities</h1>
    </div>
</div>
<!-- =============== END HERO =============== -->

@endsection