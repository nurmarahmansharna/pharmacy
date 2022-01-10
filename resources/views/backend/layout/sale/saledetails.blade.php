@extends('master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sale Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sale</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div id="messages"></div>


                    <a href="{{route('sale')}}" class="btn btn-primary">Add Sale</a>
            <br /> <br />

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sale Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Purchase Id</th>
                  <th>Item</th>
                  <th>Qty</th>
                  <th> Price</th>
                  <th>Sub Total</th>
                  {{-- <th>category</th> --}}
                  {{-- <th>Action</th> --}}
                  </tr>
                </thead>
                <tbody>



                    @foreach($saledetails as $cart)
                    <tr>

                        <td>{{ $loop->iteration }}</td>
                        <td>{{$cart['sale_id']}}</td>
                        <td>{{$cart->medicine->medicine_name}}</td>
                        <td>{{$cart['qty']}}</td>
                        <td>{{$cart['sale_price']}}</td>
                        <td>{{$cart['sale_price']*$cart['qty']}}</td>

                        {{-- <td>{{$purc->category->category_name}}</td> --}}




                        {{-- <td class="">
                          <a href="#"><i class="material-icons">cancel</i></a>
                          <a href="#"><i class="material-icons">edit</i></a>

                        </td> --}}




                    </tr>
                    @endforeach()

            </tbody>

              </table>

            </div>
            <!-- /.box-body -->
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

  <!-- remove brand modal -->


        </form>


      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->





    <div class="control-sidebar-bg"></div>
  </div>


@endsection
