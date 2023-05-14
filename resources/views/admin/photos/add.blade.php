@extends('admin.layouts.master')
@section('title', 'Admin Add Photo')
@section('content')
<div class="content-wrapper" style="min-height: 1342.875px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Photo</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Photo</h3>
              </div>
              <div class="container">

                <!-- /.card-header -->
                <div class="form-group">
                      <label>Name Days</label>
                      <div class="form-control" id="exampleInputEmail1">{{$tour->name}}</div>
                    </div>
                <!-- form start -->
                <form id="quickForm" method="POST" action="{{route('tour_photo_add', $tour->id)}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                      <label for="name">Name Photo</label>
                      <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name photo">
                  </div>
                  <div class="form-group">
                      <div class="custom-file">
                        <input type="file" name="photo" class="custom-file-input" id="photo" required>
                        <label class="custom-file-label" for="photo">Image tours</label>
                      </div>
                      <input type="hidden" name="tour_id" value="{{$tour->id}}">
                  </div>
                  <!-- /.card-body -->
                  <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection