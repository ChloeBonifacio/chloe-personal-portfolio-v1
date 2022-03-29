@extends('layout.layout')

@section('title' , 'Home')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/css/home.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/work.css') }}">
@endsection

@section('content')

    {{-- Main Section --}}
    <div class="row flex-grow align-items-center" id="mainSection">
        <div class="col-lg-6 p-5 flex-grow align-items-center">
            <div class="text-lg-start text-md-start text-center">
                <h4 class="mb-0">HELLO I'M</h4>
                <h1 class="m-0" >Chloe Bonifacio</h1>
                <p class="w-lg-75 w-100">Dedicated Junior Developer with experience in full stack web development using Laravel framework. Proficient in using designing tools for storyboarding, prototyping, and branding. An all-rounder, able to handle different tasks from creating proposals, handling clients, development and presentation.</p>    
            </div>
        </div>
        <div class="col-lg-6 flex-grow">
            <img src="{{ URL::asset('/images/chloebanner.png') }}" class="main-picture" alt="My Picture">
        </div>
    </div>

    {{-- Info Section --}}
    <div class="row my-5 py-5 justify-content-center" id="infoSection">
        <div class="col-lg-2 px-5">
            <div class="card text-center info-card">   
                <div class="card-body">
                    <img src="{{ URL::asset('/images/designerIcon.png') }}" class="mb-3" alt="Design Icon">
                    <br>
                    <small>01</small>
                    <h3>Designer</h3>
                    <p>Designing is part of myself and I value creating designs for people.</p>
                    <h5>Things I Design</h5>
                    <p>Newsletter, Magazine, Branding, UI/UX, Books, Posts</p>
                    <h5>Designing Tools</h5>
                    <p>
                        Photoshop <br>
                        Illustrator <br>
                        InDesign <br>
                        Adobe XD <br>
                        Figma
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 px-5">
            <div class="card text-center info-card">   
                <div class="card-body">
                    <img src="{{ URL::asset('/images/developerIcon.png') }}" class="mb-3" alt="Design Icon">
                    <br>
                    <small>02</small>
                    <h3>Developer</h3>
                    <p>I like coding things from scratch! I enjoy bringing my ideas to life.</p>
                    <h5>Languages I Speak</h5>
                    <p>HTML, CSS, Laravel, Flutter, Java</p>
                    <h5>Dev Tools</h5>
                    <p>
                        VSCode <br>
                        Bootstrap <br>
                        WordPress <br>
                        GitHub <br>
                        GitLab
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 px-5">
            <div class="card text-center info-card">   
                <div class="card-body">
                    <img src="{{ URL::asset('/images/mentorIcon.png') }}" class="mb-3" alt="Design Icon">
                    <br>
                    <small>03</small>
                    <h3>Mentor</h3>
                    <p>I love sharing my skills and knowledge, helping fellow students to elevate.</p>
                    <h5>Things I Teach</h5>
                    <p>UI/UX, Design, Presentation, Branding, Laravel</p>
                    <h5>How I Teach</h5>
                    <p>
                        Live Sessions <br>
                        Training Plans <br>
                        1-on-1 Sessions <br>
                        Output Critiquing <br>
                        Case Canvases
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Services Section --}}
    <div class="row my-5 py-5 px-5 align-items-center" id="serviceSection">
        <div class="col-lg-3 text-lg-start text-md-start text-center mb-3">
            <h1 class="large-title">My Services</h1>
            <p>I may have a solution that you need. Contact me or check my freelancing profiles to hire me!</p>
            <a class="btn btn-round btn-dark-round raise" href="#"><img src="{{ URL::asset('/images/upwork.png') }}" alt="Upwork"></a>
            <a class="btn btn-round btn-dark-round raise" href="#"><img src="{{ URL::asset('/images/fiverr.png') }}" alt="Fiverr"></a>
        </div>
        <div class="col mx-3 my-3 px-3">
            <div class="card service-card" data-aos="fade-up" data-aos-duration="2500">
                <div class="card-body p-0">
                    <div class="p-3">
                        <p class="mb-0 service-num">01</p>
                        <h2 class="my-0">Website Design</h2>
                    </div>
                    <div class="pink-line"></div>
                    <div class="p-3">
                        <p>Don’t want to dive into developing yet? Turn your dream website into reality through visualization and prototyping.</p>
                        <ul>
                            <li>UI/UX Design</li>
                            <li>Website Storyboard</li>
                            <li>Logo and Branding</li>
                        </ul>
                    </div>
                </div>
                <a class="btn btn-custom-gradient btn-translate ms-auto raise">CONTACT ME</a>
            </div>
            
        </div>
        <div class="col mx-3 my-3 px-3">
            <div class="card service-card" data-aos="fade-up" data-aos-duration="2000">
                <div class="card-body p-0">
                    <div class="p-3">
                        <p class="mb-0 service-num">02</p>
                        <h2 class="my-0">Website Development</h2>
                    </div>
                    <div class="pink-line"></div>
                    <div class="p-3">
                        <p>Manage your content and products with a custom website tailored-fit to your needs and requests.</p>
                        <ul>
                            <li>Custom Website</li>
                            <li>Tailored-Fit</li>
                            <li>Content Management</li>
                        </ul>
                    </div>
                </div>
                <a class="btn btn-custom-gradient btn-translate ms-auto raise">CONTACT ME</a>
            </div>
            
        </div>
        <div class="col mx-3 my-3 px-3">
            <div class="card service-card" data-aos="fade-up" data-aos-duration="1500">
                <div class="card-body p-0">
                    <div class="p-3">
                        <p class="mb-0 service-num">03</p>
                        <h2 class="my-0">Design Conversion</h2>
                    </div>
                    <div class="pink-line"></div>
                    <div class="p-3">
                        <p>Got a design but don’t know how to code? Turn your design into a fully functioning site.</p>
                        <ul>
                            <li>XD/Figma/PSD to HTML,CSS</li>
                            <li>Mobile Responsive</li>
                            <li>Clean Code</li>
                        </ul>
                    </div>
                </div>
                <a class="btn btn-custom-gradient btn-translate ms-auto raise">CONTACT ME</a>
            </div>
            
        </div>
        <div class="col-lg-1"></div>
    </div>

    {{-- Latest Works Section --}}
    <div class="row my-5 px-5 justify-content-center py-5">
        <h1 class="large-title text-center">Latest Works</h1>
        <div class="col-lg-8 my-5">
           <div class="row row-cols-lg-2">
                <div class="col-lg-6 justify-content-center mb-5 pb-5">
                    <div class="work-card mx-auto mb-3">
                        <div class="ribbon"><span>FULL STACK</span></div>
                        <div class="overlay">
                            <div class="tech-stack-list">
                                <span class="tech-stack">CSS</span>
                                <span class="tech-stack">HTML</span>
                                <span class="tech-stack">LARAVEL</span>    
                            </div>
                        </div>
                        <div class="">
                            <img src="{{ URL::asset('/images/jobposting.png') }}" alt="Sample Work">
                        </div>
                        <p class="work-title text-center m-2">Job Posting Website</p>
                        <div class="d-flex justify-content-center work-icon-links">
                            <a href=""><i class="fas fa-info"></i></a>
                            <a href=""><i class="fas fa-eye"></i></a>
                            <a href=""><i class="fab fa-gitlab"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 pb-5">
                    <div class="work-card mx-auto mb-3">
                        <div class="ribbon"><span>WORDPRESS</span></div>
                        <div class="overlay">
                            <div class="tech-stack-list">
                                <span class="tech-stack">CSS</span>
                                <span class="tech-stack">HTML</span>
                                <span class="tech-stack">LARAVEL</span>    
                            </div>
                        </div>
                        <div class="">
                            <img src="{{ URL::asset('/images/enet.png') }}" alt="Sample Work">
                        </div>
                        <p class="work-title text-center m-2">E-Net Philippines Website</p>
                        <div class="d-flex justify-content-center work-icon-links">
                            <a href=""><i class="fas fa-info"></i></a>
                            <a href=""><i class="fas fa-eye"></i></a>
                            <a href=""><i class="fab fa-gitlab"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 pb-5">
                    <div class="work-card mx-auto mb-3">
                        <div class="ribbon"><span>FRONTEND</span></div>
                        <div class="overlay">
                            <div class="tech-stack-list">
                                <span class="tech-stack">CSS</span>
                                <span class="tech-stack">HTML</span>
                                <span class="tech-stack">LARAVEL</span>    
                            </div>
                        </div>
                        <div class="">
                            <img src="{{ URL::asset('/images/aguora.png') }}" alt="Sample Work">
                        </div>
                        <p class="work-title text-center m-2">Aguora Company Website</p>
                        <div class="d-flex justify-content-center work-icon-links">
                            <a href=""><i class="fas fa-info"></i></a>
                            <a href=""><i class="fas fa-eye"></i></a>
                            <a href=""><i class="fab fa-gitlab"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 pb-5">
                    <div class="work-card mx-auto mb-3">
                        <div class="ribbon"><span>FRONTEND</span></div>
                        <div class="overlay">
                            <div class="tech-stack-list">
                                <span class="tech-stack">CSS</span>
                                <span class="tech-stack">HTML</span>
                                <span class="tech-stack">LARAVEL</span>    
                            </div>
                        </div>
                        <div class="">
                            <img src="{{ URL::asset('/images/retando.png') }}" alt="Sample Work">
                        </div>
                        <p class="work-title text-center m-2">Ret and Ro e-Commerce</p>
                        <div class="d-flex justify-content-center work-icon-links">
                            <a href=""><i class="fas fa-info"></i></a>
                            <a href=""><i class="fas fa-eye"></i></a>
                            <a href=""><i class="fab fa-gitlab"></i></a>
                        </div>
                    </div>
                </div>
               
                
           </div>
        </div>
    </div>

    {{-- Contact Section --}}
    <div class="row my-5 px-5 justify-content-center py-5" data-aos="fade-up" data-aos-duration="2000" id="contactSection">
        <h1 class="large-title text-center mb-5">Contact Me</h1>
        <div class="col-lg-2">
            <p>For any sort of help or inquiries, feel free to send me an <a class="custom-pink fw-bold" href="mailto:bonifacio.chloesophia@gmail.com">email</a> and I’ll get back to you soon.</p>
            <p class="fw-bold custom-pink">Social Links</p>
            <a href=""><i class="fas fa-angle-right custom-pink me-2"></i>Facebook</a><br>
            <a href=""><i class="fas fa-angle-right custom-pink me-2"></i>Twitter</a><br>
            <a href=""><i class="fas fa-angle-right custom-pink me-2"></i>Instagram</a><br>
            <a href=""><i class="fas fa-angle-right custom-pink me-2"></i>LinkedIn</a>
        </div>
        <div class="col-lg-4 mt-3">
            <form action="">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"></i></span>
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <textarea name="content" cols="30" rows="10" class="form-control">Type your message here...</textarea>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.overlay').hover(function() {
            $(this).fadeTo(1,1);
        },function() {
            $(this).fadeTo(1,0);
        });
    </script>
@endsection
    