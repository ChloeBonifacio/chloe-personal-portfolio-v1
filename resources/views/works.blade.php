@extends('layout.layout')

@section('title', 'My Works')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/css/work.css') }}">
@endsection

@section('content')
<div class="row my-5 px-lg-5">
    <div class="col-12 col-lg-11">
        <h1 class="giant-title c-primary mb-0">MY WORKS</h1>
    </div>
</div>

<div class="row px-lg-5 mb-5">
    <div class="col-lg-3 pt-3">
        <p>Welcome to my works! I documented all my projects in this page. Feel free to browse and use the filter below for my project tags:</p>
        <form action="">
            <input type="checkbox" class="hidden" name="cb" id="cb" checked>
            <label for="cb">all</label>
            @foreach (range(1,10) as $item)
            <input type="checkbox" class="hidden" name="cb" id="cb">
            <label for="cb">text</label>
            @endforeach
        </form>
    </div>
    <div class="col-lg-9">
        <div class="row row-cols-lg-2 scrollable-content px-3 pt-3">
            @foreach (range(1,10) as $x)
                <div class="col-lg-6 col-md-6 justify-content-center mb-3">
                    <div class="work-card-wrapper pb-3">
                        <div class="work-card mb-3">
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
                           
                            
                        </div>
                        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center px-3 mt-2">
                            <p class="work-title mb-0">Job Posting Website</p>
                            <div class="d-flex justify-content-center work-icon-links">
                                <a href="{{route('works.view')}}"><i class="fa-solid fa-info"></i></a>
                                <a href=""><i class="fa-solid fa-eye"></i></a>
                                <a href=""><i class="fa-brands fa-gitlab"></i></a>
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
    