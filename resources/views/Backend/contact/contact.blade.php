@extends('layouts.app')
@section('title')
    Contact Page
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Contact Page</li>
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
          <div class="col-md-10 mx-auto">
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
                <h3 class="card-title">Contact Page </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="{{route('update-contact-page')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Name<span class="text-danger">*</span></label>
                    <input type="text" name="page_name" class="form-control" value="{{$page->page_name}}" placeholder="Enter Page Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Long Description</label>
                    <textarea id="summernote" name="description" id="" rows="5" class="form-control" placeholder="Enter Page Description">{!!$page->description!!}</textarea>
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