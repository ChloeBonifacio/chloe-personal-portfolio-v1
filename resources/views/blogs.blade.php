@extends('layout.layout')

@section('title', 'My Blogs')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/css/blog.css') }}">
@endsection

@section('content')
<div class="row my-5 px-lg-5">
    <div class="col-12 col-lg-11">
        <h1 class="giant-title c-primary mb-0">MY BLOGS</h1>
    </div>
</div>

<div class="row px-lg-5 mb-5">
    <div class="col-lg-3 pt-3">
        <p>Welcome to my blogs! One of my personal goal is to be able to document all my journey and learnings hoping that maybe one of my content will help someone in their project.</p>
        
    </div>
    <div class="col-lg-9">
        <div class="row row-cols-lg-2 scrollable-content px-3 pt-3">
            @foreach (range(1,10) as $x)
                <div class="col-lg-6 col-md-6 justify-content-center mb-3">
                    <div class="blog-card mx-auto d-flex gap-2">
                        <div class="ribbon"><span>FULL STACK</span></div>
                        <img src="{{ URL::asset('/images/jobposting.png') }}" alt="Sample Work">
                        <div class="blog-info p-3">
                            <p class="blog-title">Title of my blog content</p>
                            <p class="blog-excerpt">Don’t want to dive into developing yet? Turn your dream website into reality through visualization and prototyping. </p>
                            <div class="blog-footer d-flex justify-content-between align-items-center mt-5">
                                <p class="blog-date mb-0">{{Carbon\Carbon::now()->format('m/d/Y')}}</p>
                                <a class="btn-action-view" href="{{route('works.view')}}"><i class="fa-regular fa-circle-right fa-xl"></i></a>
                            </div>
                        </div>   
                    </div>
                    
                </div>
            @endforeach
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
    