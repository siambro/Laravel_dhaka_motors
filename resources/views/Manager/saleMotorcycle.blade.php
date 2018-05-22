@extends('Manager/layouts.manager')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sale Motorcycle</h1>
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
                  <form role="form" method="post" action="{{URL::to('/sale_m')}}"> 
                  {{ csrf_field() }}
                  <table id="example1" class="table table-hover table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <!-- <th>ID</th> -->
                      <th>Name</th>
                      <!-- <th>Model</th> -->
                      <th>Engine</th>
                      <th>Chassis</th>
                      <th>CC</th>
                      <th>Color</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_motorcycle_info as $v_motorcycle)
                      <tr>
                        <td width="5%"><input type="radio" name="id" class="flat-red" value="{{$v_motorcycle->id}}" required></td>
                        <!-- <td>{{$v_motorcycle->id}}</td> -->
                        <td>{{$v_motorcycle->name}}</td>
                        <!-- <td>{{$v_motorcycle->type}}</td> -->
                        <!-- <td>{{$v_motorcycle->model}}</td> -->
                        <td>{{$v_motorcycle->engineNo}}</td>
                        <td>{{$v_motorcycle->chassisNo}}</td>
                        <td>{{$v_motorcycle->cc}}</td>
                        <td>{{$v_motorcycle->color}}</td>
                        <!-- <td>{{$v_motorcycle->price}}</td> -->
                        
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
                <div class="card-header">
                  <h3 class="card-title">Customer Information</h3>
                
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="col-md-12">
                    <div class="form-group">
                      <!-- <label for="engine">Engine</label> -->
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                      <!-- <label for="chassis">Chassis No</label> -->
                      <input type="text" class="form-control" name="name" id="name" placeholder="Customer Name" required>
                    </div>
                    <div class="form-group">
                      <!-- <label for="cc">CC</label> -->
                      <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                      <!-- <label for="color">Color</label> -->
                      <input type="text" class="form-control" name="nid" id="nid" placeholder="NID" required>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-block btn-success" onclick="return confirm('Are you sure want to SALE?')">Sale</button>
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