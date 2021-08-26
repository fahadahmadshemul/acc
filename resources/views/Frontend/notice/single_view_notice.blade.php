@extends('layouts.frontend_layout')
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
                    <h4 class="mb-4" style="color: #294a70">Archives : Notice</h4>
                    <p>Description</p>
                    <div class="left-sidebar-content">
                            <article class="entry-post"><!-- Start article -->
                                <div class="inner-content"><!-- Start inner-content -->
                                    <h2><a href="{{route('view-notice', $notice->id)}}">{{$notice->title}}</a></h2>
                                    <a href="{{URL::to($notice->image)}}" target="_blank">নোটিশ দেখার জন্য এখানে ক্লিক করুন</a>
                                </div><!-- End inner-content -->
                            </article><!-- End article -->
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{route('view-notice', $prev->id)}}" class="btn btn-primary">{{substr($prev->title, 0, 100)}}</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('view-notice', $next->id)}}" class="btn btn-primary">{{substr($next->title, 0, 100)}}</a>
                            </div>
                        </div>
                    </div>
                </div>
@endsection