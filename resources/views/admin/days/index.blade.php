@extends('admin.layouts.master')
@section('title', 'Admin Days')
@section('content')
<div class="content-wrapper" style="min-height: 1299.6875px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard / Tour</h1>
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
                <h3 class="card-title">DataTable for days</h3>
              </div>
              <div class="card-footer d-flex justify-content-end">
                <form method="POST" action="{{route('admin_days_add_show')}}">
                  @csrf  
                  <button class="btn btn-primary">Add</button>
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                  <thead>
                  <tr>
                    <th>Name Days</th>
                    <th>More</th>
                </tr>
                  </thead>
                  <tbody>
                    @foreach($tour as $item)
                  <tr class="odd">
                    <td>{{$item->name}}</td>
                    <td>
                    <div class="d-flex">
                      <form method="POST" action="{{route('admin_days_update_show', $item->id)}}" class="mr-2">
                        @csrf
                        <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                      </form>
                      <form method="POST" action="{{route('admin_days_delete', $item->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                      </form>
                    </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                </table></div></div>
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
  </div>

@endsection