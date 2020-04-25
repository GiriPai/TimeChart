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
                        <h4 class="page-title">Students</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.department_master') }}">Department</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Student</li>
                                </ol>
                            </nav>
                        </div>
                        
                    </div>
                   
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <button type="button" class="btn btn-success" onclick="addModalBtn()"><i class="fa fa-plus-circle"></i> Add Student</button>
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
                                <h4 class="card-title">Student</h4>
                               
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Photo
                                                <th>Roll No</th>
                                                <th>Name</th>
                                                <th>Course</th>
                                                <th>Phone No.</th>
                                                <th>Email</th>
                                                <th>Status</th>
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
                                <h4 class="modal-title">Add a Student</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form  id="addForm" enctype="multipart/form-data">
                                <div class="modal-body">
                                    @csrf
                                        <div class="form-group">
                                            <label for="student_roll" class="control-label">Student Roll</label>
                                            <input type="text" class="form-control" id="student_roll" name="student_roll" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="fname" class="control-label">First Name</label>
                                            <input type="text" class="form-control" id="fname" name="fname">
                                        </div>

                                        <div class="form-group">
                                            <label for="lname" class="control-label">Last Name</label>
                                            <input type="text" class="form-control" id="lname" name="lname">
                                        </div>

                                        <div class="form-group">
                                            <label for="designation" class="control-label">Course</label>
                                            <select class="custom-select mr-sm-2" id="designation" name="course" required="true">
                                                <option value="" selected>Choose...</option>
                                                @foreach($courses as $course)
                                                <option value="{{ $course->id }}"> {{ $course->course_name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="address" class="control-label">Address</label>
                                            <textarea class="form-control" rows="3" name="address"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone_number" class="control-label">Phone Number</label>
                                            <input type="text" class="form-control" id="phone_number" name="phone_number" required="true">
                                        </div>

                                        <div class="form-check form-check-inline">
                                                <label for="email" class="control-label">Gender
                                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                                                <label class="form-check-label" for="inlineRadio1">Male</label>
                                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                                                <label class="form-check-label" for="inlineRadio2">Female</label>
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="pic" class="control-label">Profile Picture</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="file" name="file" required="true">
                                                    <label class="custom-file-label" for="file">Choose file</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="bio" class="control-label">Bio</label>
                                            <textarea class="form-control" rows="3" name="bio"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="label_check c_on" for="checkbox-01">
                                                <input name="status" id="status" type="checkbox" class="statusCheckBox"> Status
                                            </label>                                            
                                        </div> 

                                        <div class="form-group">
                                            <label for="email" class="control-label">E-Mail</label>
                                            <input type="email" class="form-control" id="email" name="email" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="control-label">Password</label>
                                            <input type="text" class="form-control" id="password" name="password" required="true">
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="department_id" value="{{ Request::segment(3) }}">
                                  
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
                                            <label for="student_roll" class="control-label">Student Roll</label>
                                            <input type="text" class="form-control" id="edit_student_roll" name="student_roll" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="fname" class="control-label">First Name</label>
                                            <input type="text" class="form-control" id="edit_fname" name="fname">
                                        </div>

                                        <div class="form-group">
                                            <label for="lname" class="control-label">Last Name</label>
                                            <input type="text" class="form-control" id="edit_lname" name="lname">
                                        </div>

                                        <div class="form-group">
                                            <label for="designation" class="control-label">Course</label>
                                            <select class="custom-select mr-sm-2" id="edit_course" name="course" required="true">
                                                <option value="">Choose...</option>
                                                @foreach($courses as $course)
                                                <option value="{{ $course->id }}"> {{ $course->course_name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="address" class="control-label">Address</label>
                                            <textarea class="form-control" rows="3" name="address" id="edit_address"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="phone_number" class="control-label">Phone Number</label>
                                            <input type="text" class="form-control" id="edit_phone_number" name="phone_number">
                                        </div>

                                        <div class="form-check form-check-inline">
                                                <label for="email" class="control-label">Gender
                                                <input class="form-check-input" type="radio" name="gender" id="edit_inlineRadio1" value="Male">
                                                <label class="form-check-label" for="inlineRadio1">Male</label>
                                                <input class="form-check-input" type="radio" name="gender" id="edit_inlineRadio2" value="Female">
                                                <label class="form-check-label" for="inlineRadio2">Female</label>
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="pic" class="control-label">Profile Picture</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="edit_file" name="file">
                                                    <label class="custom-file-label" for="file">Choose file</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="bio" class="control-label">Bio</label>
                                            <textarea class="form-control" rows="3" name="bio" id="edit_bio"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="label_check c_on" for="checkbox-01">
                                                <input name="status" id="edit_status" type="checkbox" class="statusCheckBox"> Status
                                            </label>                                            
                                        </div> 

                                        <div class="form-group">
                                            <label for="email" class="control-label">E-Mail</label>
                                            <input type="email" class="form-control" id="edit_email" name="email" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="password" class="control-label">Password</label>
                                            <input type="text" class="form-control" id="edit_password" name="password" required="true">
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="department_id" value="{{ Request::segment(3) }}">
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
                         "url": "{{ route('admin.students.getData') }}",
                         "dataType": "json",
                         "type": "POST",
                         "data":{ _token: "{{csrf_token()}}"}
                       },
                "columns": [
                    { "data": "pic" },
                    { "data": "student_roll" },
                    { "data": "name" },
                    { "data": "course" },
                    { "data": "phone_number" },
                    { "data": "email" },
                    { "data": "status"},
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
                        url : "{{ route('admin.students.store') }}",
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
                    url : "{{ route('admin.students.delete') }}", 
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
                    url : "{{ route('admin.students.edit') }}",                
                    type: "POST",
                    data:{'id':id,  _token: "{{csrf_token()}}"},
                    beforeSend: function () {
                      $('#myPleaseWait').modal('show');
                    },                  
                    success:function(response)
                    {   
                        var data=response;
                        console.log(data);                   

                        console.log(data.length);                   
                        if(data.length === 1){
                            $.each(data,function(key,value){
                               $('#hiddenId').val(value.id); 
                               $('#edit_student_roll').val(value.student_roll);
                               $('#edit_fname').val(value.fname);
                               $('#edit_lname').val(value.lname);
                               $('#edit_course').val(value.course_id);
                               $('#edit_address').val(value.address);
                               $('#edit_phone_number').val(value.phone_number);
                               $('#edit_bio').val(value.bio);
                              
                               $('#edit_email').val(value.email);
                               $('#edit_password').val(value.password);

                               if(value.gender == 'Male'){
                                    $('#edit_inlineRadio1').prop('checked','true');
                               }else{
                                    $('#edit_inlineRadio2').prop('checked','true');
                               }    

                             
                               if(value.isBlocked == 0){
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
                    url : "{{ route('admin.students.update') }}",
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

