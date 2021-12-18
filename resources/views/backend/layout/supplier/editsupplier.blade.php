@extends('master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage
        <small>Supplier</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div>

          </div>

          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          
              @endif
          <form role="form" action="{{route('supplier.update',$supplier->id)}}" method="post"> {{--enctype="multipart/form-data"> --}}
            @csrf

            @method ('put')
              <div class="box-body">

                <div class="form-group">
                  <label for="suppliername">Supplier name</label>
                  <input value="{{$supplier->supplier_name}}" type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="Supplier name" autocomplete="off">
                </div>
                

                


                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input value="{{$supplier->phone}} "required name="phone" type="text" class="form-control" id="phone" name="phone" placeholder="Phone" autocomplete="off">
                </div>

                <div class="form-group">
                  <label for="address">Address</label>
                  <input value="{{$supplier->address}}" required name="address" type="text" class="form-control" id="address" name="address" placeholder="Address" autocomplete="off">
                </div>


                <div class="form-group">
                  <label for="email">Email</label>
                  <input value="{{$supplier->email}}" required name="email" type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                </div>

                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $("#groups").select2();

    $("#mainUserNav").addClass('active');
    $("#createUserNav").addClass('active');

  });
</script>



  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


@endsection
