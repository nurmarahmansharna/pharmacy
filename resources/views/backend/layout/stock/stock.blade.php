@extends('master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage
            Stocks</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Stocks</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <div id="messages"></div>



                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Manage Stocks</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="manageTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width:50px">SL</th>
                                    <th style="width:150px">Item</th>
                                    <th style="width:150px">Available Stock</th>
                                    <th style="width:150px">Produced Date</th>
                                    <th style="width:150px">Expired Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stock as $stoc)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$stoc->medicine->medicine_name}}</td>
                        <td>{{$stoc->qty}}</td>
                        <td>{{$stoc->produced_date}}</td>
                        <td>{{$stoc->expired_date}}</td>




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