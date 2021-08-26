@extends('layouts.app')
@section('title')
    Set Permission To {{$role_name->roll_name}}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Set Permission To {{$role_name->roll_name}}</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Set Permission To {{$role_name->roll_name}}</li>
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
                    <h3 class="card-title">Set Permission To {{$role_name->roll_name}}</h3>
                    
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                      <tr>
                        <th>Menu Name</th>
                        <th>Is Vissible</th>
                        <th>Is View</th>
                        <th>Is Add</th>
                        <th>Is Edit</th>
                        <th>Is Delete</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($collection as $item)
                        <form action="{{route('save-privilege', $id)}}" method="post">
                          @csrf
                            <tr>
                              <td>
                                @if ($i == 1)
                                  User
                                @elseif($i == 2)
                                  Manage Post
                                @elseif($i == 3)
                                  Manage Slider
                                @elseif($i == 4)
                                  Notice
                                @elseif($i == 5)
                                  At a Glance
                                @elseif($i == 6)
                                  Academics
                                @elseif($i == 7)
                                  Admission
                                @elseif($i == 8)
                                  Administration
                                @elseif($i == 9)
                                  Event
                                @elseif($i == 10)
                                  Useful Link
                                @elseif($i == 11)
                                  Explore
                                @elseif($i == 12)
                                  Gallery
                                @elseif($i == 13)
                                  Contact
                                @endif
                                {{$i}}
                              </td>
                              <input type="hidden" name="operation_id" value="{{$item->operation_id}}" id="">
                              <td class="text-center">
                                  <div class="icheck-primary">
                                      <input type="checkbox" <?php if($item->is_vissible == 1) echo 'checked'; ?> name="is_vissible[]" id="check{{$i}}">
                                      <label for="check{{$i}}">
                                      </label>
                                    </div>
                              </td><td class="text-center">
                                  <div class="icheck-primary">
                                      <input type="checkbox" <?php if($item->is_view == 1) echo 'checked'; ?> name="is_view[]" id="check2{{$i}}">
                                      <label for="check2{{$i}}">
                                      </label>
                                    </div>
                              </td><td class="text-center">
                                  <div class="icheck-primary">
                                      <input type="checkbox" <?php if($item->is_add == 1) echo 'checked'; ?> name="is_add[]" id="check3{{$i}}">
                                      <label for="check3{{$i}}">
                                      </label>
                                    </div>
                              </td><td class="text-center">
                                  <div class="icheck-primary">
                                      <input type="checkbox" <?php if($item->is_edit == 1) echo 'checked'; ?> name="is_edit[]" id="check4{{$i}}" >
                                      <label for="check4{{$i}}">
                                      </label>
                                    </div>
                              </td><td class="text-center">
                                  <div class="icheck-primary">
                                      <input type="checkbox" <?php if($item->is_delete == 1) echo 'checked'; ?> name="is_delete[]" id="check5{{$i}}">
                                      <label for="check5{{$i}}">
                                      </label>
                                    </div>
                              </td>
                              <td>
                                <input type="submit" class="btn btn-primary btn-sm" value="Save">
                              </td>
                          </tr>
                        </form>
                          @php
                              $i++
                          @endphp
                        @endforeach
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection