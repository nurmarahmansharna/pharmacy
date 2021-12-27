@extends('master')
@section('content')







<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Medicines</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Medicines</li>
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
            <h3 class="box-title">Add Medicine</h3>
          </div>

          <div>

            @if($errors->any())
          @foreach($errors->all() as $error)
             <div>
                 <p class="alert alert-danger">{{error}}</p>
             </div>
         @endforeach
             
        @endif

              @if(session()->has('message'))
             <div class="row" style="padding: 20px;">
                 <span class="alert alert-success">{{session()->get('message')}}</span>
             </div>
             @endif

          </div>
          <!-- /.box-header -->
           <form name="myForm" role="form" action="{{route('medicine.create')}}" method="post" enctype="multipart/form-data" >
            @csrf
              <div class="box-body">


                <div class="form-group">

                  <label for="product_image">Image</label>
                  <div class="kv-avatar">
                      <div class="file-loading">
                          <input required name="image" id="product_image"  type="file">
                      </div>
                  </div>
                </div>

               

                <div class="form-group">
                  <label for="medicine_name">Medicine name</label>
                  <input required name="medicine_name" type="text" class="form-control" id="medicine_name"  placeholder="Enter medicine name" autocomplete="off"/>
                </div>


                <div class="form-group">
                    <label for="price">Sell Price</label>
                    <input required name="sale_price" type="text" class="form-control" id="sale_price" name="sale_price"
                        placeholder="Enter price" autocomplete="off" />
                </div>






                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea required  type="text" class="form-control" id="description" name="description" placeholder="Enter
                  description" autocomplete="off">
                  </textarea>
                </div>




                <div class="form-group">
                  <label for="category">Medicine Type</label>
                  <select class="form-control select_group" id="type" name="type" required="">
                    @foreach ($medicine_type as $add)

                    <option value="{{$add->id}}">{{$add->medicine_type}}</option>

                    @endforeach 

                    </select>
                </div>

                <div class="form-group">
                    <label for="category">Generic Type</label>
                    <select class="form-control select_group" id="generic_type" name="generic" required="">
                      @foreach ($generic_type as $add)
  
                      <option value="{{$add->id}}">{{$add->generic_name}}</option>
  
                      @endforeach 
  
                      </select>
                  </div>
  
  



                <div class="form-group">
                  <label for="store">Availability</label>
                  <select class="form-control" id="availability" name="availability" required="">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="" class="btn btn-warning">Back</a>
              </div>
            </form>
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

<script type="text/javascript">
  $(document).ready(function() {
    $(".select_group").select2();
    $("#description").wysihtml5();

    $("#mainProductNav").addClass('active');
    $("#addProductNav").addClass('active');

    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>';
    $("#product_image").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-1',
        msgErrorClass: 'alert alert-block alert-danger',
        // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
        layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });

  });
</script> 

<script>
    function validateForm() {
      let x = document.forms["myForm"]["product_image"]["product_name"]["sale_price"]["description"]["category"]["availability"].value;
      if (x == "") {
        alert("Name must be filled out");
        return false;
      }
    }
    </script>

<div>
</div>
@endsection
