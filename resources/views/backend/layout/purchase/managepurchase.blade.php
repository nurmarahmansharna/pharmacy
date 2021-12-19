@extends('backend.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage
        Purchase</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Purchase</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div id="messages"></div>

          <div id="printableArea">


                    <a href="{{route('product')}}" class="btn btn-primary">Add Purchase</a>
            <br /> <br />

            

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Purchase Id</th>
                  <th>Date</th>
                  <th>Challan No</th>
                  <th>Supplier</th>
                  <th>Total Price</th>
                  <th>Received By</th>
                  {{-- <th>category</th> --}}
                  <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach($purchasemanage as $purc)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$purc->id}}</td>
                        <td>{{$purc->purchase_date}}</td>
                        <td>{{$purc->challan_no}}</td>
                        <td>{{$purc->supplier->supplier_name}}</td>
                        <td>{{$purc->total_price}}</td>
                        <td>{{$purc->User->username}}</td>





                        <td class="">
                            <a href="{{route('Purchaselist', $purc->id)}}"><i class="material-icons">view_list</i></a>

                        </td>




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

      </div>
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
