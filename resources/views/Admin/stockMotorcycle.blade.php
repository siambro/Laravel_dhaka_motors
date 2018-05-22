@extends('Admin/layouts.admin')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Motorcycle Stock</h1>
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

    <?php $exception=Session::get('delete');
      if($exception){?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fa fa-check"></i> Alert!</h5>
        <?php
            echo $exception;
            Session::put('delete', null);
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
          <form role="form" method="post" action="{{URL::to('/stock_m')}}"> 
          {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Type</label>
                    <select class="form-control select2" data-placeholder="Select a State"
                            style="width: 100%;"  name="m_type" required>
                      <option>Sports</option>
                      
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Name</label>
                    <select class="form-control select2" style="width: 100%;" name="m_name" required>
                      <!-- <option selected="selected">FZS V1</option> -->
                      <option>FZS V1</option>
                      
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Model</label>
                    <select class="form-control select2" style="width: 100%;"  name="m_model" required>
                      <option selected="selected">2010</option>
                      <option>2010</option>
                      
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              
                <div class="col-md-6">
                
                  
                    <div class="form-group">
                      <label for="engine">Engine</label>
                      <input type="text" class="form-control" name="engineNo" id="engine" placeholder="Engine No" required>
                    </div>
                    <div class="form-group">
                      <label for="chassis">Chassis No</label>
                      <input type="text" class="form-control" name="chassisNo" id="chassis" placeholder="Chassis No" required>
                    </div>
                    <div class="form-group">
                      <label for="cc">CC</label>
                      <input type="text" class="form-control" name="cc" id="cc" placeholder="CC" required>
                    </div>
                    <div class="form-group">
                      <label for="color">Color</label>
                      <input type="text" class="form-control" name="color" id="color" placeholder="Color" required>
                    </div>
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" name="price" id="price" placeholder="Price" required>
                    </div>
                   
                   
                  <!-- <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div> -->
              
                </div>
                <!-- /.col -->
                
                  <button type="submit" class="btn btn-block btn-primary">Submit</button>
                
              
            </div>
            <!-- /.row -->
            </form>
          </div>
          <!-- /.card-body -->
          <!-- <div class="card-footer">
            Visit <a href="#">Select2 documentation</a> for more examples and information about
            the plugin.
          </div> -->
        </div>
        <!-- /.card -->

       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card">
            <div class="card-header">
              <h3 class="card-title" align="center">Motorcycle Stock</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-hover table-striped">
                <thead>
                <tr>
                  <!-- <th>ID</th> -->
                  <th>Name</th>
                  <!-- <th>Type</th> -->
                  <th>Model</th>
                  <th>Engine No</th>
                  <th>Chassis No</th>
                  <th>CC</th>
                  <th>Color</th>
                  <th>Price</th>
                </tr>
                </thead>

                @foreach($all_motorcycle_info as $v_motorcycle)
                <tr>
                  <!-- <td>{{$v_motorcycle->id}}</td> -->
                  <td>{{$v_motorcycle->name}}</td>
                  <!-- <td>{{$v_motorcycle->type}}</td> -->
                  <td>{{$v_motorcycle->model}}</td>
                  <td>{{$v_motorcycle->engineNo}}</td>
                  <td>{{$v_motorcycle->chassisNo}}</td>
                  <td>{{$v_motorcycle->cc}}</td>
                  <td>{{$v_motorcycle->color}}</td>
                  <td>{{$v_motorcycle->price}}</td>
                  <td>
                  <a href="{{URL::to('/view_m/'.$v_motorcycle->id)}}"><button type="button" class="btn btn-block btn-outline-info btn-sm">View</button></a>
                  </td>
                  <td>
                      <a href="{{URL::to('/delete_m/'.$v_motorcycle->id)}}"><button type="button" class="btn btn-block btn-outline-danger btn-sm" onclick="return confirm('Are you sure want to Delete?')">Delete</button></a>
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