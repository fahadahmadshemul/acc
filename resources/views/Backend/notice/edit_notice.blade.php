@extends('layouts.app')
@section('title')
    Edit Notice
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Notice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Notice</li>
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
                <h3 class="card-title">Edit Notice </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="{{route('update-notice', $edit->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Notice Title</label>
                    <input type="text" name="title" class="form-control" value="{{$edit->title}}" placeholder="Enter Notice Title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Notice Image</label>
                    <br>
                    @php
                        $image_type = explode('.', $edit->image);
                        $ext = end($image_type);
                    @endphp
                    @if ($ext == 'pdf')
                        <iframe src="{{URL::to($edit->image)}}" style="max-height:100px" frameborder="0"></iframe>
                    @else
                        <img src="{{URL::to($edit->image)}}" style="max-height: 100px;" alt="">
                    @endif
                    <br>
                    <br>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    <span class="text-danger"><strong>Note : </strong>Upload format pdf, jpg, jpeg, png.</span>
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