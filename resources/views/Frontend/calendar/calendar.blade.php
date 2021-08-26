@extends('layouts.frontend_layout')
<style>
    #calendar{
    width: 80% !important;
    margin-left: 100px !important;
    box-shadow: 0px 0px 10px #000;
    padding:15px; 
    background: #fff;
  }
  #calendar-container {
    position: fixed;
    top: 0%;
    text-align: center;
    left: 10%;
    right: 10%;
    bottom: 20%;
  }
</style>

@section('content')
    <!--====== CATEGORY PART START ======-->
    <section class="category-section" id="categories">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-xs-12 col-12">
                    <div class="left-sidebar-content">
                        <h2>Calendar</h2>
                        <br>
                        <div id='calendar'></div>
                    </div>
                </div>
@endsection