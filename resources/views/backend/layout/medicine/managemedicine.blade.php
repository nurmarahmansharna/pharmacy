@extends('master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage
        <small>Medicines</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Medicines</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div id="messages"></div>


           <a href="{{route('medicine')}}" class="btn btn-primary">Add Medicine</a>
            <br /> <br />
            <div>

                @if(session()->has('message'))
               <div class="row" style="padding: 20px;">
                   <span class="alert alert-success">{{session()->get('message')}}</span>
               </div>
               @endif

            </div>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Medicines</h3>
            </div>
            <br /> <br />


            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                  <th>Medicine Name</th>
                  <th>Sell Price</th>
                  <th>Description</th>
                  <th>Medicine Type</th>
                  <th>Medicine Generic</th>
                   <th>Availability</th>
                  <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($medicines as $medicine)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$medicine->medicine_name}}</td>
                            <td>{{$medicine->sale_price}}</td>
                            <td>{!!$medicine->description!!}</td>
                            <td>{{$medicine->type->medicine_type}}</td>
                            <td>{{$medicine->generic->generic_name}}</td>
                            <td>{{$medicine->availability}}</td>

                            <td class="">
                              <a onclick="return confirm('Are you sure you want to delete this item?');" href="#"><i class="material-icons">cancel</i></a>
                              <a href="#"><i class="material-icons">edit</i></a>

                            </td>


                            {{-- <td>{{$category->active}}</td> --}}
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