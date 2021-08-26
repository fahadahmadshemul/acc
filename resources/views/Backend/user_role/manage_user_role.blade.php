@extends('layouts.app')
@section('title')
    Manage User Roles
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Manage User Roles</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Manage User Roles</li>
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
                 
                  <h3 class="card-title">Manage User Roles</h3>
                    <h3 class="text-right"><a href="{{route('add-user-role')}}" class="btn btn-primary"> <i class="fas fa-plus"></i> Add User Role</a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Role Name</th>
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
                                <td>{{$item->roll_name}}</td>
                                <td>
                                  @php
                                    $role_id = Session::get('role_id');
                                    $Permission = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 1)->first();
                                  @endphp
                                  @if ($Permission->is_add == 1)
                                  <a href="{{route('add-privilege-to-role', $item->id)}}" class="btn btn-info btn-sm">Set Role Permission To User</a>
                                  @endif
                                  @if ($Permission->is_edit == 1)
                                  <a href="{{route('edit-role', $item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                  @endif  
                                  @if ($Permission->is_delete == 1)
                                  <a href="{{route('delete-role', $item->id)}}" id="Delete" class="btn btn-danger btn-sm">Delete</a>
                                  @endif
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