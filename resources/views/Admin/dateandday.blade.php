@extends('Admin.layouts.master')
@section('content')
    
    <!-- ================    A============================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Date and Day</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Date and Day</li>
                            </ol>
                        </nav>
                    </div>  
                </div>
               
                <div class="col-7 align-self-center">
                    <div class="d-flex no-block justify-content-end align-items-center">
                         <button type="button" class="btn btn-success" onclick="addModalBtn()"><i class="fa fa-plus-circle"></i> Add Date and Day Order</button>
                    </div>
                </div>
            </div>
        </div>
            <div class="modal fade bs-example-modal-sm" id="myPleaseWait" tabindex="-1"
                 role="dialog" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-sm">
                    <div class="text-center" style="margin: 230px auto;">
                     <!--    <img src="/image/ajax-loader.gif" alt=""/><br><br> -->
                        <span style="color: #fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing...</span>
                    </div>
                </div>
            </div>  
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- basic table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Date and Day Orders</h4>
                           
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Date</th>
                                            <th>Day Order</th>
                                            <th>Event</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    

                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <!-- sample modal content -->
            <div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Date and Day Orders</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form  id="addForm" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                    <div class="form-group">
                                        <label for="Date" class="control-label">Date</label>
                                        <input type="date" class="form-control" id="date" name="date" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="day_order" class="control-label">Day Order</label>
                                        <select class="custom-select mr-sm-2" id="day_order" name="day_order" required="true">
                                            <option value="" selected>Choose...</option>
                                            <option value="1"> 1</option>
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4</option>
                                            <option value="5"> 5</option>
                                            <option value="6"> 6</option>
                                            <option value="9"> Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="event" class="control-label">Event</label>
                                        <input type="text" class="form-control" id ="event" name="event">
                                    </div>

                                    <div class="form-group">
                                        <label class="label_check c_on" for="checkbox-01">
                                            <input name="status" id="status" type="checkbox" class="statusCheckBox"> Status
                                        </label>                                            
                                    </div> 

                            </div>
                            <div class="modal-footer">
                                
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End sample Model for add -->


            <div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Date and Day Order</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form  id="updateForm" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                    <div class="form-group">
                                        <label for="Date" class="control-label">Date</label>
                                        <input type="date" class="form-control" id="editdate" name="editdate" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="day_order" class="control-label">Day Order</label>
                                        <select class="custom-select mr-sm-2" id="editday_order" name="editday_order" required="true">
                                            <option value="0" selected>Choose...</option>
                                            <option value="1"> 1</option>
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4</option>
                                            <option value="5"> 5</option>
                                            <option value="6"> 6</option>
                                            <option value="9"> Others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="event" class="control-label">Event</label>
                                        <input type="text" class="form-control" id ="editevent" name="editevent">
                                    </div>

                                    <div class="form-group">
                                        <label class="label_check c_on" for="checkbox-01">
                                            <input name="editstatus" id="editstatus" type="checkbox" class="statusCheckBox"> Status
                                        </label>                                            
                                    </div> 

                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id" id="hiddenId">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
              
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    @include('Admin.layouts.pagescript')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax":{
                         "url": "{{ route('admin.d-d.getData') }}",
                         "dataType": "json",
                         "type": "POST",
                         "data":{ _token: "{{csrf_token()}}"}
                       },
                "columns": [
                    { "data": "id" },
                    { "data": "date" },
                    { "data": "day_order"},
                    { "data": "event" },
                    { "data": "status" },
                    { "data": "created_at"},
                    { "data": "option"},
                ]    

            });
        });

        function addModalBtn(){
            $("#addForm").trigger('reset');
            $("#addModal").modal('show');
        }
        $("#addForm").on('submit',function(e){
            e.preventDefault();
            
                $.ajax({
                        url : "{{ route('admin.d-d.store') }}",
                        type: "POST",
                        data: new FormData(this),

                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function () {
                          $('#myPleaseWait').modal('show');
                        },                    
                        success:function(data){    
                            if(data == 1){
                               
                                swal("add data successfully", "", "success"); 
                                $('#myPleaseWait').modal('hide');
                                $("#addModal").modal('hide');
                                reload_table();                        
                            }else if(data == 2){
                                swal("all fields are required ", "", "warning"); 
                                $('#myPleaseWait').modal('hide');
                                return false;
                            }else if(data == 3){
                                swal("data already exist", "", "warning"); 
                                $('#myPleaseWait').modal('hide');
                                return false;
                            }else if(data == 4){
                                swal("image not added", "", "warning"); 
                                $('#myPleaseWait').modal('hide');
                                return false;
                            }
                            else{
                                swal("data not added", "", "error"); 
                                $('#myPleaseWait').modal('hide');
                                return false;                        
                            }
                            
                        },
                        error: function(data)
                        {
                            $('#myPleaseWait').modal('hide');
                            swal("data not added", "", "error"); 
                        }
                        
                    });
      
        });


        function deleteBtn(id){
            var x = confirm("Are you sure you want to delete?");
            if (x)
                $.ajax({
                    url : "{{ route('admin.d-d.delete') }}", 
                    type: "POST",
                    data : {"id":id, _token: "{{csrf_token()}}" },
                    success:function(data)
                    {    
                        if(data == 1){
                            reload_table();
                            swal("data deleted successfully", "", "success"); 
                        }else{
                            swal("data not deleted", "", "error");   
                            return false;                        
                        }
                    },
                    error: function(data)
                    {
                        swal("Error occurd!", " Please try again", "error");   
                    }
                });   
             else
                return false;
        } 

        function editModalBtn(id){
            $.ajax({
                    url : "{{ route('admin.d-d.edit') }}",                
                    type: "POST",
                    data:{'id':id,  _token: "{{csrf_token()}}"},
                    // beforeSend: function () {
                    //   $('#myPleaseWait').modal('show');
                    // },                  
                    success:function(response)
                    {   
                        var data=response;
                        console.log(data);                   

                        console.log(data.length);                   
                        if(data.length === 1){
                            $.each(data,function(key,value){
                               $('#hiddenId').val(value.id); 
                               $('#editdate').val(value.start_date);
                               $('#editday_order').val(value.day_order);
                               $('#editevent').val(value.event);
                               if(value.status == 1){
                                  $('#editstatus').prop('checked','true');
                               }
                            });
                            $("#editModal").modal('show');                        
                        }else{
                            swal("please try again later", "", "error");  
                            return false;
                        }
                        $('#myPleaseWait').modal('hide');
                    },
                    error: function(data){
                        $('#myPleaseWait').modal('hide');
                        swal("Error occurd!", " Please try again", "error");   
                    }
                });       
           
        }


        $("#updateForm").on('submit',function(e){
            e.preventDefault();
            $.ajax({
                    url : "{{ route('admin.d-d.update') }}",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                      $('#myPleaseWait').modal('show');
                    },   
                    success:function(data){   
                        $("#updateForm").trigger('reset');
                        if(data == 1){
                            reload_table();
                            swal("updated data successfully", "", "success");   
                            $('#myPleaseWait').modal('hide');
                            $("#editModal").modal('hide');                        
                        }else if(data == 2){
                            swal("all fields are required ", "", "warning");   
                            $('#myPleaseWait').modal('hide');
                            return false;
                        }else if(data == 3){
                            swal("data already exist", "", "warning");   
                            $('#myPleaseWait').modal('hide');
                            return false;
                        }else if(data == 4){
                                swal("image not updated", "", "warning");   
                                $('#myPleaseWait').modal('hide');
                                return false;
                        }
                        else{
                            swal("data not updated", "", "error");   
                            $('#myPleaseWait').modal('hide');
                            return false;                        
                        }
                    },
                    error: function(data)
                    {
                         $('#myPleaseWait').modal('hide');
                        swal("data not updated", "", "error");   
                    }
                });

            return false;         
            
        });  

        function reload_table(){
            $('#table').DataTable().ajax.reload();
        }
    </script>

@endsection

