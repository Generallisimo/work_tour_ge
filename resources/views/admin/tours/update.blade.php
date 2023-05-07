@extends('admin.layouts.master')
@section('title', 'Admin Update Tours')
@section('content')
<div class="content-wrapper" style="min-height: 1342.875px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Tour</h1>
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
                <h3 class="card-title">New Tour</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{route('admin_tour_update', $tour->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name Tour</label>
                    <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="{{$tour->name}}">
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Enter description">{{$tour->description}}</textarea>
                  </div>
                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" name="image" class="custom-file-input" id="image" value="{{$tour->image}}">
                      <label class="custom-file-label" for="image">Image tours</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="Enter price" value="{{$tour->price}}">
                  </div>
                  <div class="form-group row">
                  <label for="day_id">Дни:</label>
                  <select name="day_id" id="day_id" class="form-control">
                    <option value="{{$tour->day_id}}">{{$tour->day->name}}</option>
                    @foreach($days as $day)
                    <option value="{{$day->id}}">{{$day->name}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group row">
                  <label for="category_id">Категории:</label>
                  <select name="category_id" id="category_id" class="form-control">
                    <option value="{{$tour->category_id}}">{{$tour->category->name}}</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
              </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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