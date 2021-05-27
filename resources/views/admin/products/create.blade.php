@extends('admin.adminmaster')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<br><br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('/admin/products/store')}}" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="details">Details</label>
                    <input type="text" class="form-control" name="details" id="details" placeholder="Details">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="integer" class="form-control" name="quantity" id="quantity" placeholder="Quantity">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="integer" class="form-control" name="price" id="price" placeholder="Price">
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
         </div>   
        </div>  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 

@endsection