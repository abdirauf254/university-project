@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- =============== FULL-WIDTH HERO =============== -->
<div 
    class="w-full h-[70vh] bg-center bg-cover bg-no-repeat flex items-center justify-center relative"
    style="background-image: url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQ79Kejs0h1CoNCFUCVnjDrjKPlGvEy_TrwEO5z32tKJtysQDgf');"
>
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Text -->
    <div class="relative text-center text-white px-4 max-w-3xl">
        <h1 class="text-4xl md:text-5xl font-bold">Contact Us</h1>
    </div>
</div>
<!-- =============== END HERO =============== -->

<!-- ==== GOOGLE MAP FULL WIDTH ==== -->
<div class="w-full mt-5">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.14589183203!2d36.8057676!3d-1.2665951!2m3!1f0!2f0!3f0!3m2!
        1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1778c4228ad3%3A0xdee4c4b0e1db7bc2!
        2sInstitute%20of%20Software%20Technologies!5e0!3m2!1sen!2ske!4v1703618092345"
        
        width="100%" 
        height="500" 
        style="border:0;" 
        allowfullscreen="lazy" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>


@endsection