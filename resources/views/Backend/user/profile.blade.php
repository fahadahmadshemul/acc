@extends('layouts.app')
@section('title')
    Profile
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    @php
                      $photo = $user->photo;
                    @endphp
                    @if ($photo == NULL)
                      <img class="profile-user-img img-fluid img-circle"
                         src="{{asset('/')}}public/Backend/dist/img/user4-128x128.jpg"
                         alt="User profile picture">
                    @else
                      <img class="profile-user-img img-fluid img-circle"
                    src="{{URL::to($photo)}}"
                    alt="User profile picture">
                    @endif
                    
                  </div>
  
                  <h3 class="profile-username text-center">{{$user->name}}</h3>
  
                  <p class="text-muted text-center">
                      @php
                          $user_type = $user->user_type;
                      @endphp
                      @if ($user_type == 1)
                          Admin
                      @else
                          General User
                      @endif
                  </p>
                  <p class="text-muted text-center">{{$user->email}}</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Update Profile</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="settings">
                      <form class="form-horizontal" action="{{route('update-profile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="name" class="form-control" name="name" value="{{$user->name}}" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" name="email" value="{{$user->email}}" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-2 col-form-label">
                            <label for="exampleInputFile">Change Photo</label>
                          </div>
                          <div class="col-sm-10">
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="photo" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                              </div>
                            </div>
                            <span class="text-danger"><strong>Note: </strong><small>If you want to change photo then choose!</small></span>
                          </div>
                          
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-info">Update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection