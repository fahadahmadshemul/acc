@extends('layouts.app')
@section('title')
    Edit Gallery
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Gallery</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 mx-auto">
            <!-- general form elements -->
            <div class="card card-primary">
              @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <ul>
                            <li> {{ $error }}</li>
                        </ul>
                    @endforeach
                    </div>
                @endif
              <div class="card-header">
                <h3 class="card-title">Edit Gallery </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="{{route('update-gallery', $edit->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$edit->title}}" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Content</label>
                    <br>
                    @php
                        $image_type = explode('.', $edit->content);
                        $ext = end($image_type);
                    @endphp
                    @if(($ext == 'jpg') || ($ext == 'jpeg') || ($ext == 'png'))
                      <img style="max-height: 100px;" src="{{URL::to($edit->content)}}" alt=""></td>
                    @else
                        <video style="max-height: 100px;" controls src="{{URL::to($edit->content)}}"></video>
                    @endif
                    <br>
                    <br>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="content" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Change</span>
                      </div>
                    </div>
                    <span class="text-danger"><strong>Note : </strong>Upload format mp4, jpg, jpeg, png.</span>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection