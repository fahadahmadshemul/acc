@extends('layouts.app')
@section('title')
    Add Page
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Page</li>
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
                <h3 class="card-title">Add Page </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form action="{{route('save-administration-page')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Page Name <span class="text-danger">*</span></label>
                    <input type="text" name="page_name" class="form-control" placeholder="Enter Page Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Document Name(if you want to add document)</label>
                    <input type="text" name="document_name" class="form-control" placeholder="Enter Document Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Document Image(if you want to add document)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="document_image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    <span class="text-danger"><strong>Note : </strong>Upload format pdf, jpg, jpeg, png.</span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Long Description</label>
                    <textarea id="summernote" name="description" id="" rows="5" class="form-control" placeholder="Enter Page Description"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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