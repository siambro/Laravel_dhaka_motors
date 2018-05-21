@extends('Admin/layouts.admin')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Parts Stock</h1>
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
    <?php $exception=Session::get('message');
      if($exception){?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fa fa-check"></i> Alert!</h5>
        <?php
            echo $exception;
            Session::put('message', null);
         ?>
      </div>
    <?php
      }
    ?>
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
          <form role="form" method="post" action="{{URL::to('/stock_p')}}">
          {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Type</label>
                    <select class="form-control"
                            style="width: 100%;" name="type" required>
                      <option>Engine</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="engine">Name</label>
                      <input type="text" class="form-control" name="name" id="engine" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="chassis">Unit price</label>
                      <input type="text" class="form-control" name="u_price" id="chassis" placeholder="Unit price">
                    </div>
                    <div class="form-group">
                      <label for="cc">Quantity</label>
                      <input type="text" class="form-control" name="quantity" id="cc" placeholder="Quantity">
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
        <div class="card">
            <div class="card-header">
              <h3 class="card-title" align="center">Parts Stock</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-hover table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <!-- <th>Type</th> -->
                  <th>Name</th>
                  <th>Unit Price</th>
                  <th>Quantity</th>
                </tr>
                </thead>

                @foreach($all_parts_info as $v_parts)
                <tr>
                  <td>{{$v_parts->id}}</td>
                  
                  <td>{{$v_parts->name}}</td>
                 
                  <td>{{$v_parts->price}}</td>
                  <td>{{$v_parts->quantity}}</td>
                  
                  <td>
                      <button type="button" class="btn btn-block btn-outline-info btn-sm">View</button>
                  </td>
                  <td>
                      <button type="button" class="btn btn-block btn-outline-danger btn-sm">Delete</button>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->


@endsection