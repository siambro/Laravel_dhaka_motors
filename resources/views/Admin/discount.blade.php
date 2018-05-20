@extends('Admin/layouts.admin')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Discount</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <!-- <div class="card-header">
            <h3 class="card-title">Stock</h3> -->

            <!-- <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div> -->
          <!-- </div> -->
          <!-- /.card-header -->
          <div class="card-body">
          <form role="form">
          {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                 
                  <div class="form-group">
                      <label for="engine">Date</label>
                      <input type="text" class="form-control" id="engine" placeholder="From" required>
                    </div>
                    <div class="form-group">
                      <label for="chassis">Date</label>
                      <input type="text" class="form-control" id="chassis" placeholder="To" required>
                    </div>
                    <div class="form-group">
                      <label for="p">Percentage (%)</label>
                      <input type="number" class="form-control" id="p" min="1" max="40" placeholder="Percentage" required>
                    </div>
                    
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                </div>
                <!-- /.col -->
              
            </div>
            <!-- /.row -->
            </form>
          </div>
          
        </div>
       
      </div>
    </section>
    <!-- /.content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title" align="center">Stock</h3>

          </div>
          <!-- /.card-header -->
          <div class="card-body">

          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->


@endsection