@extends('master')
@section('content')
@php
    $total=0;
@endphp


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            INVOICE</small>
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


                <button class="btn btn-primary" onclick="printDiv('printableArea')">
                    <i class="fa fa-printer"></i>Print
                </button>
                <br /> <br />
                <div id="printableArea">

                    <div class="box">
                        <div class="box-header">
                            <img src="{{url('/uploads/n.png')}}" width="128" height="63" alt="" />
                            <h3 style="text-align: center;">RAHMAN PHARMACY</h3>
                            <h6 style="text-align: center;">INVOICE</h6>
                        </div>

                        {{-- <div class="col-md-6">
                            @foreach($customer as $list)

                            <div class="table-responsive">
                                <table class="table table-sm table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <th style="width:150px" class="pl-0 w-5" scope="row"><strong>Customer
                                                    Name:</strong></th>
                                            <td>{{$list->Customer->customer_name}}</td>
                        </tr>
                        <tr>
                            <th style="width:100px" class="pl-0 w-5" scope="row"><strong>Mobile
                                    No:</strong></th>
                            <td>{{$list->Customer->phone}}</td>
                        </tr>
                        <tr>
                            <th style="width:100px" class="pl-0 w-5" scope="row">
                                <strong>Address:</strong></th>
                            <td>{{$list->Customer->address}}</td>
                        </tr>

                        </tr>
                        </tbody>
                        </table>
                    </div>
                    @endforeach

                </div> --}}
                
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="manageTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
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
                            @php
                            

                            $total=$cart->sub_total+ $total
                            
                            @endphp
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{$cart->medicine->medicine_name}}</td>
                                <td>{{$cart->qty}}</td>
                                <td>{{$cart->sale_price}}</td>
                                <td>{{$cart->sub_total}}</td>


                                {{-- <td>{{$purc->category->category_name}}</td> --}}




                                {{-- <td class="">
                          <a href="#"><i class="material-icons">cancel</i></a>
                          <a href="#"><i class="material-icons">edit</i></a>

                        </td> --}}




                            </tr>

                            @endforeach()

                        </tbody>

                    </table>



                    <h4>Total: {{$total}} TK</h4>

                </div>
                <!-- /.box-body -->
            </div>
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
