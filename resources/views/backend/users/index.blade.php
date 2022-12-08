@extends('backend.layouts.app')
@section('content')
<div class="main-content app-content mt-0">
  <div class="side-app">

      <!-- CONTAINER -->
      <div class="main-container container-fluid">

          <!-- PAGE-HEADER -->
          <div class="page-header">
              <h1 class="page-title">Table</h1>
              <div>
                  <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
              </div>
          </div>
          <!-- PAGE-HEADER END -->

          <!-- Row -->
          <div class="row">
              <div class="col-xl-12">
                  <div class="card">
                      @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                      @endif
                      <div class="card-header">
                          <h3 class="card-title">Users List</h3>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table border text-nowrap text-md-nowrap table-striped mb-0">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Roles</th>
                                          <th width="280px">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($data as $key => $user)
                                      <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td >
                                          @if(!empty($user->getRoleNames()))
                                            @foreach($user->getRoleNames() as $v)
                                              <label class="text-dark">{{ $v }}</label>
                                            @endforeach
                                          @endif
                                        </td>
                                        <td>
                                          @hasrole('Admin')
                                          <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                          <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                            @endrole
                                        </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Row -->
      </div>
      <!-- CONTAINER CLOSED -->

  </div>
</div>



@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
      @hasrole('Admin')
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        @endrole
    </td>
  </tr>
 @endforeach
</table>


{!! $data->render() !!}

@endsection