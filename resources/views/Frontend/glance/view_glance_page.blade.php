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
                    <div class="left-sidebar-content">
                        <h2>{{$page->page_name}}</h2>
                        <br>
                        {!! $page->description !!}
                    </div>
                </div>
@endsection