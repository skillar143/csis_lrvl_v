@extends('admin-layouts.master_layout')

@section('content')

<nav class="navbar navbar-expand navbar-light  topbar static-top ">
    <!-- Topbar Search -->
    <h1 class="h3 text-gray-800 mr-auto mb-2 text-capitalize">{{ $type }} List</h1>
</nav>  

<div class="card shadow mb-4 animated--grow-in">
    <div class="card-body p-4">
        <div class="table-responsive">
            <table class="table p-4" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-dark">
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-2">Name</th>
                        <th class="col-2">Email</th>
                        <th class="col-1">Password</th>
                        <th class="col-1">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                   <tr>
                     <td  >{{$user->username}}</td>
                     <td  >{{$user->name}}</td>
                     <td  >{{$user->email}}</td>
                     <td class="text-truncate">{{ substr($user->password, 7, 8) . '...' }}</td>
                     <td class="d-flex">
                          <a href="#" class="btn btn-sm btn-success btn-icon-split edit-user" data-toggle="modal" data-target="#editUser" 
                          data-id="{{$type}}" data-name="{{$user->name}}" data-username="{{$user->username}}">
                                <span class="icon text-white-50">
                                <i class="fas fa-key"></i>
                                </span>
                                <span class="text d-none d-xl-block">Change Password</span>
                            </a>
                     </td>
                   </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>



@endsection
