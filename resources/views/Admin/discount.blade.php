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
          <form role="form" method="post" action="{{URL::to('/add_discount')}}">
          {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                 
                  <div class="form-group">
                      <label for="datepicker">Date</label>
                      <input type="text" class="form-control" name="from" id="datepicker" placeholder="From" required>
                    </div>
                    <div class="form-group">
                      <label for="datepick">Date</label>
                        <div class="input-group date">
                          <input type="text" class="form-control" name="to" id="datepick" placeholder="To" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="p">Percentage (%)</label>
                        <div class="input-group date">
                          <input type="number" class="form-control" name="percentage" id="p" min="1" max="40" placeholder="Percentage" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary" onclick="return confirm('Are you sure want SET?')">Submit</button>
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
              <h3 class="card-title" align="center">Motorcycle Discount</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-hover table-striped">
                <thead>
                <tr>
                  <th></th>
                  <th>#</th>
                  <th>Discount From</th>
                  <th>Discount To</th>
                  <th>Parcentage(%) </th>
                  <th>Extende</th>

                </tr>
                </thead>

                @foreach($all_discount_info as $v_discount)
                <tr>
                  <td>
                      <button type="button" class="btn btn-block btn-outline-danger btn-sm">Delete</button>
                  </td>
                  <td>{{$v_discount->id}}</td>
                  <td>{{$v_discount->from}}</td>
                  <td>{{$v_discount->to}}</td>
                  <td>{{$v_discount->percentage}}</td>
                  <td><form class="form-horizontal" method="POST">
                      <div class="form-group margin-bottom-none">
                      
                        
                          <div class="input-group date">
                            <input type="text" class="form-control input-sm" value="{{$v_discount->to}}" name="expend" id="datepicker2" required >
                          </div>
                        
                  </td>
                  <td>
                        
                        <input type="hidden" value="" name="discount_id">
                          <button type="submit" class="btn btn-success btn-block btn-sm" name="set" onclick="return confirm('Are you sure want SET?')">Set</button>
                        
                      </div>
                    </form>
                  </td>

                  <!-- <td>
                      <button type="button" class="btn btn-block btn-outline-info btn-sm">View</button>
                  </td> -->
                  
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