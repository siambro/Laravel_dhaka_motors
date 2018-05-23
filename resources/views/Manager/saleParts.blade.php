@extends('Manager/layouts.manager')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sale Parts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <li class="breadcrumb-item active">Manager</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- /.content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
            <div class="col-md-8">
              <div class="card">
                <!-- <div class="card-header">
                  <h3 class="card-title">Bordered Table</h3>
                </div> -->
                <!-- /.card-header -->
                <div class="card-body">
                  <form role="form" method="post" action="{{URL::to('/sale_p')}}"> 
                  {{ csrf_field() }}
                  <table id="example1" class="table table-hover table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <!-- <th>ID</th> -->
                      <th>Name</th>
                      <!-- <th>Model</th> -->
                      <th>Unit Price</th>
                      <th>Sale Quantity</th>
                      <!-- <th>CC</th>
                      <th>Color</th> -->
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_parts_info as $v_parts)
                      <tr>
                        <td width="5%"><input type="checkbox" name="p_id[{{$v_parts->id}}]" class="flat-red" value="{{$v_parts->id}}" required></td>
                        
                        <td>{{$v_parts->name}}</td>
                        
                        <td>{{$v_parts->price}}</td>
                        <td><input type="number" name="quantity[{{$v_parts->id}}]" class="flat-red" max="{{$v_parts->quantity}}" min=1 required></td>
                      
                        
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
              <div class="card">
                <!-- <div class="card-header">
                  <h3 class="card-title">Customer Information</h3>
                
                </div> -->
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="col-md-12">
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-block btn-success"onclick="return confirm('Are you sure want to SALE?')">Sale Parts</button>
                    </div>
                  </div>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              
            </div>
            <!-- /.col -->
            
          </div>
          <!-- /.row -->
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->


@endsection