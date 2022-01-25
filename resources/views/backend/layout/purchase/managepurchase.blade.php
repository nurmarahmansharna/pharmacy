@extends('master')
@section('content')

@php
    $total=0;
@endphp
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

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Purchase</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Invoice No</th>
                  <th>Date</th>
                  <th>Challan No</th>
                  <th>Supplier</th>
                  <th>Total Price</th>
                  <th>Purchase By</th>
                  <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach($purchase as $purchases)
                    @php

                    $total=$purchases->total_price+ $total
                @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>inv{{$purchases->id}}m</td>
                        <td>{{$purchases->purchase_date}}</td>
                        <td>{{$purchases->challan_no}}</td>
                        <td>{{$purchases->supplier->supplier_name}}</td>
                        <td>{{$purchases->total_price}}</td>
                        <td>{{$purchases->User->username}}</td>






                        <td class="">
                            <a href="{{route('purchase.details',$purchases->id)}}"><i class="fa fa-align-justify"></i></a>


                        </td>




                    </tr>
                    @endforeach()
            </tbody>

              </table>
              <h3><td>TOTAL- {{$total}} TK</td></h3>
              {{$purchase->links('pagination::bootstrap-4')}}


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
