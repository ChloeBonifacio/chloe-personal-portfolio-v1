@extends('layout.layout')

@section('title', 'Reach')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/css/work.css') }}">
@endsection

@section('content')
<div class="row justify-content-center pt-5 my-5">
    <div class="col">
        <h1 class="giant-title mb-5 px-5">Contact Me</h1>
    </div>
</div>

<div class="row my-5 px-5 py-5" data-aos="fade-up" data-aos-duration="2000" id="contactSection">
    <div class="col-lg-2 mb-3">
        <p>For any sort of help or inquiries, feel free to send me an <a class="c-primary fw-bold" href="mailto:bonifacio.chloesophia@gmail.com">email</a> and I’ll get back to you soon.</p>
        <p class="fw-bold c-primary">Social Links</p>
        <a class="c-primary" href=""><i class="fas fa-angle-right c-primary me-2"></i>Facebook</a><br>
        <a class="c-primary" href=""><i class="fas fa-angle-right c-primary me-2"></i>Twitter</a><br>
        <a class="c-primary" href=""><i class="fas fa-angle-right c-primary me-2"></i>Instagram</a><br>
        <a class="c-primary" href=""><i class="fas fa-angle-right c-primary me-2"></i>LinkedIn</a>
    </div>
    <div class="col-lg-5 mb-3">
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
    <div class="col-lg-2"></div>
    <div class="col-lg-2 text-center">
        <a class="btn btn-round btn-pink-round raise" href="#"><img src="{{ URL::asset('/images/upwork.png') }}" class="upwork" id="upwork" alt="Upwork"></a>
        <h5 class="my-4">Got any job for me? You can also contact me through Upwork or Fiverr</h5>
        <a class="btn btn-round btn-pink-round raise" href="#"><img src="{{ URL::asset('/images/fiverr.png') }}" id="fiverr" alt="Fiverr"></a>
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
    