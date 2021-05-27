@extends('admin.adminmaster')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<br><br>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Table</h3>
              </div>
              
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message}}</p>
          </div>
            @endif
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">SL</th>
                      <th>Product</th>
                      <th>Details</th>
                      <th>Quantity</th>
                      <th>price</th>
                      <th style="width: 400px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @php($i = 1)
                  @foreach ($products as $all_products)
                 <tr>
                     <td>{{$i++}}</td>
                     <td>{{$all_products->name}}</td>
                     <td>{{$all_products->details}}</td>
                     <td>{{$all_products->quantity}}</td>
                     <td>{{$all_products->price}}</td>
                     <td> 
                  <form>
                  
                  <a class="btn btn-info" href="#">Show</a>

                  <a class="btn btn-primary" href="#">Edit</a>

                  <!-- @csrf
                  @method('DELETE') -->

                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
                 </tr>
                 @endforeach
                  </tbody>
                </table>
              </div>
              </div>
      </div><!-- /.container-fluid -->
      {!! $products->links()!!}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection