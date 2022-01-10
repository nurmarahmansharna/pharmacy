@extends('master')
@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage
            <small>Medicine Type</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Medicine Type</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <div id="messages"></div>


                <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add Medicine type</button>
                <br /> <br />

                <div>

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

                </div>

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Manage Medicine Type</h3>
                    </div>



                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="manageTable" class="table table-bordered table-striped">
                            <thead>

                                <tr>
                                    <th>Medicine Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($type as $types)
                                    <tr>
                                        <td>{{ $types->medicine_type }}</td>
                                        <td>{{ $types->status }}</td>
                                        <td class="">
                                            

                                            <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('type.delete',$types->id)}}"><i class="material-icons">cancel</i></a>
                                            <a href="{{route('type.edit',$types->id)}}"><i class="material-icons">edit</i></a>
                                            <a
                                                href="{{route('type.details',$types->id)}}"><i
                                                    class="material-icons">details</i></a>
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

<!-- create brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Medicine Type</h4>
            </div>

            <form role="form" action="{{route('type.create')}}" method="post" id="createForm">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="brand_name">Medicine Type</label>
                        <input type="text" class="form-control" id="category_name" name="medicine_type"
                            placeholder="Enter medicine type" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                        <label for="active">Status</label>
                        <select class="form-control" id="active" name="active">
                            <option value="Active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </form>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- edit brand modal -->





</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
<div class="control-sidebar-bg"></div>
</div>


@endsection
