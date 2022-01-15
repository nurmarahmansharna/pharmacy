@extends('master')
@section('content')





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage
            <small>Customers</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">


                <a href="#" class="btn btn-primary">Add Customers</a>
                <br /> <br />
         <div>

            @if($errors->any())
            @foreach($errors->all() as $error)
               <div>
                   <p class="alert alert-danger">{{error}}</p>
               </div>
           @endforeach
               
          @endif
               
               @if(session()->has('msg'))
           <p class="alert alert-success">{{session()->get('msg')}}</p>
               @endif

         </div>

         


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Manage Customers</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="userTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>


                            <tbody>
                                @foreach($customer as $customers)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>

                                        <td>{{ $customers->customer_name}}</td>
                                        <td>{{ $customers->email}}</td>
                                        <td>{{ $customers->address}}</td>
                                        <td>{{ $customers->phone}}</td>

                                        <td class="">
                                            <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('customer.delete',$customers->id)}}"><i class="fa fa-close" style="font-size:24px"></i></a>
                                            <a href="{{route('customer.edit',$customers->id)}}"><i class="fa fa-pencil" style="font-size:24px"></i></a>

                                          </td>



                                    </tr>

                                @endforeach 

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



</div>
@endsection
