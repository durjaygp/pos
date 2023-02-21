@extends('frontEnd.master')
@section('title','Admin Profile')
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
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="{{ (!empty($adminData->photo)) ? url('upload/admin_image/'.$adminData->photo) : url('upload/user4-128x128.jpg') }}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{$adminData->name}}</h3>
              <div class="card-body">
                <hr>
                <strong><i class="fas fa-phone mr-1"></i> Phone</strong>
  
                <p class="text-muted">{{$adminData->phone}}</p>
  
                <hr>
  
                <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
  
                <p class="text-muted">
                  <span class="tag tag-danger">{{$adminData->email}}</span>
                </p>
  
                <hr>
  
                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
  
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
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
                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">

                <div class="active tab-pane" id="settings">
                  <form class="form-horizontal" action="{{route('admin.profile.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="name" value="{{$adminData->name}}" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="email" value="{{$adminData->email}}"  placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail" name="phone" value="{{$adminData->phone}}"  placeholder="phone">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">User Image</label>
                      <div class="col-sm-10 custom-file">
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="photo" class="form-control" >
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Submit" class="btn btn-success">
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