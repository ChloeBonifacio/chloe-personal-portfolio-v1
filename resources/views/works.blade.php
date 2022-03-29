@extends('layout.layout')

@section('title', 'My Works')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/css/work.css') }}">
@endsection

@section('content')
<div class="row justify-content-center pt-5 my-5">
    <div class="col">
        <h1 class="giant-title mb-5 px-5">My Works</h1>
    </div>
</div>

<div class="row px-5 row-cols-lg-3">
    <div class="col-lg-4 justify-content-center mb-5 pb-5">
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
    <div class="col-lg-4 mb-5 pb-5">
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
    <div class="col-lg-4 mb-5 pb-5">
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
    <div class="col-lg-4 mb-5 pb-5">
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
    