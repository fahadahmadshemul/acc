@extends('layouts.app')
@section('title')
    Manage Useful Link
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Manage Useful Link</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Manage  Useful Link</li>
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
                  <h3 class="card-title">Manage  Useful Link </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Page Name</th>
                      <th>Page Description</th>
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
                                <td>{{$item->title}}</td>
                                <td>{!!$item->url!!}</td>
                                <td>
                                  @php
                                    $role_id = Session::get('role_id');
                                    $Permission = DB::table('privileges')->where('role_id', $role_id)->where('operation_id', 10)->first();
                                  @endphp
                                  @if ($Permission->is_edit == 1)
                                      <a href="{{route('edit-useful-link', $item->id)}}" class="btn btn-primary btn-xs">Edit</a>
                                  @endif
                                  @if ($Permission->is_delete == 1)
                                      <a href="{{route('delete-useful-link', $item->id)}}" id="Delete" class="btn btn-danger btn-xs">Delete</a>
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