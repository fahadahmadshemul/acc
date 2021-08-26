@extends('layouts.frontend_layout')

@section('slider')
<!--====== SLIDER PART START ======-->
    
<section id="slider-part" class="slider-active">
    @foreach ($sliders as $slider)
        <div class="single-slider bg_cover pt-150" style="background-image: url({{$slider->image}})" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">{{$slider->title}}</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">{{$slider->short_desc}}</p>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>
                                <li><a data-animation="fadeInUp" data-delay="1.9s" class="main-btn main-btn-2" href="#">Get Started</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->   
    @endforeach
    

</section>

<!--====== SLIDER PART ENDS ======-->
@endsection

@section('calendar')
<aside id="categories-2" class="widget widget_categories mb-4">
    <h2 class="widget-title">Calender</h2>
    <div id='calendar'></div>
</aside>
@endsection

@section('content')
    <!--====== CATEGORY PART START ======-->
    <section class="category-section" id="categories">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-xs-12 col-12">
                    <div class="left-sidebar-content">
                        @foreach ($posts as $post)
                            <article class="entry-post"><!-- Start article -->
                            <div class="inner-content"><!-- Start inner-content -->
                                <h2><a href="{{route('view-post', $post->id)}}">{{$post->title}}</a></h2>
                                <div class="contentinfo text-center">
                                    <a href="{{route('view-post', $post->id)}}"><img src="{{URL::to($post->image)}}" alt="01" class="aligncenter img-fluid"></a>
                                </div>
                            </div><!-- End inner-content -->
                        </article><!-- End article -->
                        @endforeach
                    </div>
                    {{-- <nav aria-label="Page navigation example">
                      <ul class="pagination pb-50">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav> --}}
                    {{$posts->links()}}
                </div>

@endsection