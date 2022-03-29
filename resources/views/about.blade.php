@extends('layout.layout')

@section('title' , 'About Me')
    
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/css/about.css') }}">
@endsection

@section('content')

<div class="row justify-content-center px-5 py-5 my-5">
    <div class="col-lg-5">
        <h1 class="large-title mb-5">About Me</h1>
        <h4 class="fw-bold mb-5">Hi! I’m a <span class="custom-pink">full stack junior web developer</span> offering tailored-fit solutions using Laravel.</h4>

        <p>From early high school, I have been utilizing my skills to generate income for extra pocket money. Before developing websites and applications, I was a freelance designer creating school paper layouts for schools within Mandaluyong City. I also experienced creating branding, logo, and posters during this time (and still do until now).</p>
        <p>At this point in my life, I realized that I have a passion for creating. Whether it is design, newspapers, or websites. From then on, I grabbed all the opportunities that are given by my trainers and advisers thus resulting in my fast-paced self-development and an early stable career.</p>
        <p>For the future, I plan to be a continuous learner. I strive to always becoming a better version of myself. Absorbing all the knowledge and skills that are necessary to my career.</p>
    </div>
    <div class="col-lg-6">
        <div class="tech-image" id="techOne"><img src="{{ URL::asset('/images/illustrator.png') }}" alt="Illustrator"></div>
        <div class="tech-image" id="techTwo"><img src="{{ URL::asset('/images/flutter.png') }}" alt="Illustrator"></div>
        <div class="tech-image" id="techThree"><img src="{{ URL::asset('/images/photoshop.png') }}" alt="Illustrator"></div>
        <div class="tech-image" id="techFour"><img src="{{ URL::asset('/images/html.png') }}" alt="Illustrator"></div>
        <div class="tech-image" id="techFive"><img src="{{ URL::asset('/images/premiere.png') }}" alt="Illustrator"></div>
        <div class="tech-image" id="techSix"><img src="{{ URL::asset('/images/bootstrap.png') }}" alt="Illustrator"></div>
        <div class="tech-image" id="techSeven"><img src="{{ URL::asset('/images/css.png') }}" alt="Illustrator"></div>
        <div class="tech-image" id="techhEight"><img src="{{ URL::asset('/images/xd.png') }}" alt="Illustrator"></div>
        <div class="tech-image" id="techNine"><img src="{{ URL::asset('/images/mysql.png') }}" alt="Illustrator"></div>
        <div class="tech-image" id="techTen"><img src="{{ URL::asset('/images/laravel.png') }}" alt="Illustrator"></div>
    </div>
</div>

<div class="row px-5 my-5">
    <div class="col text-center">
        <h1 class="fw-bold mb-5">My Journey</h1>
        <div class="mb-5">   
            <small class="custom-pink fw-bold">2022</small>
            <h4 class="fw-bold my-0">Freelance Developer</h4>
            <small class="custom-pink fw-bold">Upwork</small>
        </div>
        <div class="mb-5">   
            <small class="custom-pink fw-bold">2020 - Current</small>
            <h4 class="fw-bold my-0">Junior Full Stack Developer</h4>
            <small class="custom-pink fw-bold">Aguora IT Solutions and Technology Inc.</small>
        </div>
        <div class="mb-5">   
            <small class="custom-pink fw-bold">2019 - Current</small>
            <h4 class="fw-bold my-0">Undergraduate - BS in Information Technology</h4>
            <small class="custom-pink fw-bold">National University, Philippines</small>
        </div>
    </div>
</div>

<div class="row my-5 justify-content-center">
    <div class="col-lg-2 text-center">
        <a href="" class="btn btn-custom-gradient raise btn-large-custom">VIEW MY RESUME</a>
    </div>
</div>
    
@endsection