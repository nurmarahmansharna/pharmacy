@extends('master')
@section('content')

@php
    $total=0;
@endphp
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sales 
      Report</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sale</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div id="messages"></div>

          <form action="#" method="get">
            <div class="row book-form">
                <div class="form-input col-md-3 col-sm-6 mt-3">
                    <label>Select Date</label>
                    <input type="date" name="from_date" placeholder="Date" required="">
                </div>
                <div class="bottom-btn col-md-4 col-sm-6 mt-3">
                    <button type="submit"
                        class="btn btn-style btn-primary w-100 px-2">Search
                    </button>



                    <button class="btn btn-primary" onclick="printDiv('printableArea')">
                        <i class="fa fa-print"></i> Print
                    </button>


                </div>

            </div>

        </form>
      <br>
      





<div id="printableArea">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sales Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Invoice No</th>
                  <th>Date</th>
                  <th>Customer</th>
                  <th>Total Price</th>
                  <th>Sale By</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach($sale as $sales)
                    @php

                    $total=$sales->total_price+ $total
                @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>inv{{$sales->id}}m</td>
                        <td>{{$sales->sale_date}}</td>
                        <td>{{$sales->customer->customer_name}}</td>
                        <td>{{$sales->total_price}}</td>
                        <td>{{$sales->User->username}}</td>


                     </tr>
                    @endforeach()
            </tbody>

              </table>
              <h4><td>TOTAL- {{$total}} TK</td></h4>
              


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
  
  <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

</script>


@endsection
