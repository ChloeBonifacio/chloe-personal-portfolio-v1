@extends('layout.layout')

@section('title' , 'About Me')
    
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/css/about.css') }}">
@endsection

@section('content')

<div class="row my-5 px-lg-5">
    <div class="col-12 col-lg-11">
        <h1 class="giant-title c-primary mb-0">ABOUT ME</h1>
    </div>
</div>

<div class="row px-lg-5 py-5 my-5">
    <div class="col-lg-5">
        <h4 class="fw-bold mb-5">Hi! I’m a <span class="c-primary">full stack junior web developer</span> offering tailored-fit solutions using Laravel.</h4>

        <p>From early high school, I have been utilizing my skills to generate income for extra pocket money. Before developing websites and applications, I was a freelance designer creating school paper layouts for schools within Mandaluyong City. I also experienced creating branding, logo, and posters during this time (and still do until now).</p>
        <p>With my affinity with technology, despite having only designing experience, I was able to grow my development skills by having a hands-on involvement in real-life projects at the start of my college. I was trained to be multi-skilled which allows me to handle most roles in a development team from planning, execution, and deployment.</p>
    </div>
    <div class="col-lg-6 ps-5">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col mb-3">
                <div class="card skill-card bg-pink">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="tech-img-wrapper">
                                <img src="/images/laravel.png" alt="Laravel" class="tech-img">
                            </div>
                            <div class="c-white">
                                <h4>Laravel</h4>
                                <p class="mb-0">Full-Stack Developer</p>
                                <p class="mb-0">API Implementation/Integration</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card skill-card bg-pink">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="tech-img-wrapper">
                                <img src="/images/flutter.png" alt="Laravel" class="tech-img">
                            </div>
                            <div class="c-white">
                                <h4>Flutter</h4>
                                <p class="mb-0">Front-End Development</p>
                                <p class="mb-0">Cross Platform (Android/IOS)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card skill-card">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="tech-img-wrapper">
                                <img src="/images/flutter.png" alt="Laravel" class="tech-img">
                            </div>
                            <div>
                                <h4>Deployment</h4>
                                <p class="mb-0">Front-End Development</p>
                                <p class="mb-0">Cross Platform (Android/IOS)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card skill-card">
                    <div class="card-body">
                        <div class="d-flex gap-3">
                            <div class="tech-img-wrapper">
                                <img src="/images/flutter.png" alt="Laravel" class="tech-img">
                            </div>
                            <div>
                                <h4>Project Management</h4>
                                <p class="mb-0">Front-End Development</p>
                                <p class="mb-0">Cross Platform (Android/IOS)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100">
            <ul class="d-flex flex-wrap gap-3 justify-content-center">
                @foreach (range(1,15) as $skill)
                    <li class="ms-2">Laravel</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div class="row px-5 my-5">
    <div class="col text-center">
        <h1 class="fw-bold mb-5">My Journey</h1>
        <div class="mb-5">   
            <small class="c-primary fw-bold">2022</small>
            <h4 class="fw-bold my-0">Freelance Developer</h4>
            <small class="c-primary fw-bold">Upwork</small>
        </div>
        <div class="mb-5">   
            <small class="c-primary fw-bold">2020 - 2023</small>
            <h4 class="fw-bold my-0">Junior Full Stack Developer</h4>
            <small class="c-primary fw-bold">Aguora IT Solutions and Technology Inc.</small>
        </div>
        <div class="mb-5">   
            <small class="c-primary fw-bold">2019 - 2023</small>
            <h4 class="fw-bold my-0">BS in Information Technology</h4>
            <small class="c-primary fw-bold">National University, Philippines</small>
        </div>
    </div>
</div>

<div class="row my-5 justify-content-center">
    <div class="col-lg-2 text-center">
        <a href="" class="btn btn-custom-gradient raise btn-large-custom">VIEW MY RESUME</a>
    </div>
    <div class="col-lg-2 text-center">
        <a href="" class="btn btn-custom-gradient raise btn-large-custom">VIEW MY CV</a>
    </div>
</div>
    
@endsection