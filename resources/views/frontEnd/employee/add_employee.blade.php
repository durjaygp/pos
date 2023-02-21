@extends('frontEnd.master')
@section('title','Add Employee')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employee</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{route('all.employee')}}" class="btn btn-primary rounded-pill"><i class="fas fa-arrow-left"></i> Manage Employee</a>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h2>Add Employe</h2>
                    </div>
                    <div class="card-body">
                        <div class="active tab-pane" id="settings">
                          <form class="form-horizontal" action="" enctype="multipart/form-data" method="post">
                            @csrf
                              
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Employee Name</label>
                                  <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                </div>
                                <div class="form-group">
                                  <label>Email</label>
                                  <input type="email" class="form-control" placeholder="Enter Email" name="email">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Phone</label>
                                  <input type="phone" class="form-control" placeholder="Enter phone number" name="phone">
                                </div>
                                <div class="form-group">
                                  <label>Address</label>
                                  <input type="text" class="form-control" placeholder="Enter Address" name="address">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Experience</label>
                                  <input type="text" class="form-control" placeholder="Enter Experience Year" name="experience">
                                </div>
                                <div class="form-group">
                                  <label>Vacation</label>
                                  <input type="text" class="form-control" placeholder="Enter Vacation" name="vacation">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Experience</label>
                                  <input type="number" class="form-control" placeholder="Enter salary" name="salary">
                                </div>
                                <div class="form-group">
                                  <label>Vacation</label>
                                  <input type="text" class="form-control" placeholder="Enter Vacation" name="vacation">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Image</label>
                                  <input type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label>City</label>
                                  <input type="text" class="form-control" placeholder="Enter City" name="city">
                                </div>
                              </div>
                            </div>
                            </div>
                            <div class="row">
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

@endsection
