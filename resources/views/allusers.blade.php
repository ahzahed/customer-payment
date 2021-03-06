@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">All User Role</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if(Auth::user()->user_type == 1)
                            <a class="btn btn-info" href="{{ route('adduser_byadmin') }}" role="button">Add User</a>
                        @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>User Type</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($registeredUser as $registeredUser)
                      @if($registeredUser->user_type=="1" || $registeredUser->user_type=="2")
                        <tr>
                            <td>{{$registeredUser->id}}</td>
                            <td>{{$registeredUser->name}}</td>
                            <td>{{$registeredUser->email}}</td>
                            @if ($registeredUser->user_type == '1')
                                <td>Admin</td>
                            @else
                                <td>Moderate</td>
                            @endif
                            <td><a href="{{ url('user/role/delete/'.$registeredUser->id) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection
