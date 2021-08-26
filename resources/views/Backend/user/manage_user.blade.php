@extends('layouts.app')
@section('title')
    Manage User
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Manage User</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Manage User</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Manage User</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>User Type</th>
                      <th>Photo</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($collection as $item)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    @php
                                        $user_type = DB::table('roles')->where('id', $item->user_type)->first();
                                    @endphp
                                    {{$user_type->roll_name}}
                                </td>
                                <td><img style="max-height: 100px;" src="{{URL::to($item->photo)}}" alt=""></td>
                                <td>
                                    @php
                                        $status = $item->status;
                                    @endphp
                                    @if ($status == 1)
                                    <span class="badge badge-info right">Active</span>
                                    @else
                                    <span class="badge badge-danger right">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('edit-user', $item->id)}}" class="btn btn-primary btn-xs">Edit</a>
                                    @if ($status == 1)
                                    <a href="{{route('inactive-user', $item->id)}}" class="btn btn-warning btn-xs">Deactive</a>
                                    @else
                                    <a href="{{route('active-user', $item->id)}}" class="btn btn-success btn-xs">Active</a>
                                    @endif
                                    <a href="{{route('delete-user', $item->id)}}" id="Delete" class="btn btn-danger btn-xs">Delete</a>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection