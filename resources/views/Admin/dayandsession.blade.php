@extends('Admin.layouts.master')
@section('content')
    
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Day and Sessions for Classes</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Day order and Sessions for Classes</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <button type="button" class="btn btn-success" onclick="addModalBtn()"><i class="fa fa-plus-circle"></i> Assign Day order and Sessions</button>
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
                                <h4 class="card-title">Day Order and Sessions</h4>
                               
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Day Order</th> 
                                                <th>Department</th>
                                                <th>Course</th>
                                                <th>Session 1</th>
                                                <th>Session 2</th>
                                                <th>Session 3</th>
                                                <th>Session 4</th>
                                                <th>Session 5</th>
                                                <th>Created At</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        

                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot> -->
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
                                <h4 class="modal-title">Add Dayorder and Sessions</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form  id="addForm" enctype="multipart/form-data">
                                <div class="modal-body">
                                    @csrf
                                        <div class="form-group">
                                            <label for="order" class="control-label">Day Order</label>
                                            <select class="custom-select mr-sm-2" id="order" name="order" required="true">
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
                                            <label for="course_name" class="control-label">Course</label>
                                            <select class="custom-select mr-sm-2 course_name" id="course_name" name="course_id" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="s1" class="control-label">Session 1</label>
                                            <select class="custom-select mr-sm-2 sessions" id="s1" name="s1" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s2" class="control-label">Session 2</label>
                                            <select class="custom-select mr-sm-2 sessions" id="s2" name="s2" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s3" class="control-label">Session 3</label>
                                            <select class="custom-select mr-sm-2 sessions" id="s3" name="s3" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s4" class="control-label">Session 4</label>
                                            <select class="custom-select mr-sm-2 sessions" id="s4" name="s4" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s5" class="control-label">Session 5</label>
                                            <select class="custom-select mr-sm-2 sessions" id="s5" name="s5" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
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
                                <h4 class="modal-title">Add Dayorder and Sessions</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form  id="addForm" enctype="multipart/form-data">
                                <div class="modal-body">
                                    @csrf
                                        <div class="form-group">
                                            <label for="order" class="control-label">Day Order</label>
                                            <select class="custom-select mr-sm-2" id="edit_order" name="order" required="true">
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
                                            <label for="course_name" class="control-label">Course</label>
                                            <select class="custom-select mr-sm-2 course_name" id="edit_course_name" name="course_id" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="s1" class="control-label">Session 1</label>
                                            <select class="custom-select mr-sm-2 sessions" id="edit_s1" name="s1" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s2" class="control-label">Session 2</label>
                                            <select class="custom-select mr-sm-2 sessions" id="edit_s2" name="s2" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s3" class="control-label">Session 3</label>
                                            <select class="custom-select mr-sm-2 sessions" id="edit_s3" name="s3" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s4" class="control-label">Session 4</label>
                                            <select class="custom-select mr-sm-2 sessions" id="edit_s4" name="s4" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s5" class="control-label">Session 5</label>
                                            <select class="custom-select mr-sm-2 sessions" id="edit_s5" name="s5" required="true">
                                                <option value="" selected>Choose...</option>
                                               
                                            </select>
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
                         "url": "{{ route('admin.ds.getData') }}",
                         "dataType": "json",
                         "type": "POST",
                         "data":{ _token: "{{csrf_token()}}"}
                       },
                "columns": [
                    { "data": "id" },
                    { "data": "order" },
                    { "data": "department_name" },
                    { "data": "course_name" },
                    { "data": "s1" },
                    { "data": "s2" },
                    { "data": "s3" },
                    { "data": "s4" },
                    { "data": "s5" },
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
                        url : "{{ route('admin.ds.store') }}",
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
                    url : "{{ route('admin.ds.delete') }}", 
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
                    url : "{{ route('admin.ds.edit') }}",                
                    type: "POST",
                    data:{'id':id,  _token: "{{csrf_token()}}"},
                    beforeSend: function () {
                      $('#myPleaseWait').modal('show');
                    },                  
                    success:function(response)
                    {   
                        var data=response;                  
                        if(data.length === 1){
                            $.each(data,function(key,value){
                               $('#hiddenId').val(value.id);
                               $('#edit_order').val(value.order); 
                               $('#edit_department_name').val(value.department_id);
                               $('#edit_course_name').val(value.course_id);
                               $('#edit_s1').val(value.s1);
                               $('#edit_s2').val(value.s2);
                               $('#edit_s3').val(value.s3);
                               $('#edit_s4').val(value.s4);
                               $('#edit_s5').val(value.s5);
                              
                            });
                            $("#editModal").modal('show');                        
                        }else{
                            swal("Please try again later", "", "error");  
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

        function reload_table(){
            $('#table').DataTable().ajax.reload();
        }



        $("#updateForm").on('submit',function(e){
            e.preventDefault();
            $.ajax({
                    url : "{{ route('admin.dss.update') }}",
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
    </script>

 


@endsection

