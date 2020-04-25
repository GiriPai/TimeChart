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
                        <h4 class="page-title">Courses</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <button type="button" class="btn btn-success" onclick="addModalBtn()"><i class="fa fa-plus-circle"></i> Add Courses</button>
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
                                <h4 class="card-title">Courses</h4>
                               
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Courses Name</th>
                                                <th>Department</th>
                                                <th>Lecture Hall</th>
                                                <th>Status</th>
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
                                <h4 class="modal-title">Add a Course</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form  id="addForm" enctype="multipart/form-data">
                                <div class="modal-body">
                                    @csrf
                                        <div class="form-group">
                                            <label for="Course Name" class="control-label">Course Name</label>
                                            <input type="text" class="form-control" id="course_name" name="course_name" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="department_name" class="control-label">Department</label>
                                            <select class="custom-select mr-sm-2" id="department_name" name="department_id" required="true">
                                                <option selected>Choose...</option>
                                                @foreach($departments as $department)
                                                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="lecture_hall" class="control-label">Lecture Hall</label>
                                            <input type="text" class="form-control" id="lecture_hall" name="lecture_hall">
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
                                <h4 class="modal-title">Edit Course</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form  id="updateForm" enctype="multipart/form-data">
                                <div class="modal-body">
                                    @csrf
                                        <div class="form-group">
                                            <label for="Course Name" class="control-label">Course Name</label>
                                            <input type="text" class="form-control" id="edit_course_name" name="course_name" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="department_name" class="control-label">Department</label>
                                            <select class="custom-select mr-sm-2" id="edit_department_name" name="department_id" required="true">
                                                <option selected>Choose...</option>
                                                @foreach($departments as $department)
                                                    <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="lecture_hall" class="control-label">Lecture Hall</label>
                                            <input type="text" class="form-control" id="edit_lecture_hall" name="lecture_hall">
                                        </div>

                                        <div class="form-group">
                                            <label class="label_check c_on" for="checkbox-01">
                                                <input name="status" id="edit_status" type="checkbox" class="statusCheckBox"> Status
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
                         "url": "{{ route('admin.courses.getData') }}",
                         "dataType": "json",
                         "type": "POST",
                         "data":{ _token: "{{csrf_token()}}"}
                       },
                "columns": [
                    { "data": "id" },
                    { "data": "course_name" },
                    { "data": "department" },
                    { "data": "lecture_hall" },
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
                        url : "{{ route('admin.courses.store') }}",
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
                    url : "{{ route('admin.courses.delete') }}", 
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
                    url : "{{ route('admin.courses.edit') }}",                
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
                               $('#edit_course_name').val(value.course_name); 
                               $('#edit_department_name').val(value.department_id);
                               $('#edit_lecture_hall').val(value.lecture_hall);
                               if(value.status == 1){
                                  $('#edit_status').prop('checked','true');
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
                    url : "{{ route('admin.courses.update') }}",
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

