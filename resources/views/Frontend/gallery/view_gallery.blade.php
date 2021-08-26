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
                        <h2>Gallery</h2>
                        <div class="row">
                            @foreach ($galleries as $gallery)
                                <div class="col-md-6">
                                    <h4>{{$gallery->title}}</h4>
                                    @php
                                        $image_type = explode('.', $gallery->content);
                                        $ext = end($image_type);
                                    @endphp
                                    @if(($ext == 'jpg') || ($ext == 'jpeg') || ($ext == 'png'))
                                      <img class="w-100 shadow-1-strong rounded mb-4"  src="{{URL::to($gallery->content)}}" alt=""></td>
                                    @else
                                        <video class="w-100 shadow-1-strong rounded mb-4"  controls src="{{URL::to($gallery->content)}}"></video>
                                    @endif
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
@endsection