@extends('master')
@section('content')





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage
            <small>Users</small>
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

                <div></div>

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add User</h3>
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
            
                    <form role="form" action="{{route('user.usercreate')}}" method="post">
                        @csrf
                        <div class="box-body">


                            <div class="form-group">
                                <label for="groups">Type</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="manager">Manager</option>
                                    <option value="salesman">sales man</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="fname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="fullname"
                                    placeholder="Full Name" autocomplete="off">
                            </div>



                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password"
                                    placeholder="Password" autocomplete="off">
                            </div>





                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    autocomplete="off">
                            </div>



                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <a href="http://localhost/zakii/users/" class="btn btn-warning">Back</a>
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
    $(document).ready(function () {
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
