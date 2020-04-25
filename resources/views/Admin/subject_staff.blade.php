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
                        <h4 class="page-title">Subjects to Staffs</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Subjects</li>
                                </ol>
                            </nav>
                        </div>
                        
                    </div>
                   
                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <button type="button" class="btn btn-success" onclick="addModalBtn()"><i class="fa fa-plus-circle"></i> Assign Subject to a Staff</button>
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
                                <h4 class="card-title">Subject - Staff Allocation</h4>
                               
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Course</th>
                                                <th>Subject Code</th>
                                                <th>Subject Name</th>
                                                <th>Staff Code</th>
                                                <th>Staff Name</th>
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
                                <h4 class="modal-title">Assign a Staff to Subject</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form  id="addForm" enctype="multipart/form-data">
                                <div class="modal-body">
                                    @csrf
                                        <div class="form-group">
                                            <label for="Course Name" class="control-label">Course Name</label>
                                            <select class="custom-select mr-sm-2 course_name" id="course_name" name="course_id" required="true">
                                                <option selected>Choose...</option>
                                                @foreach($courses as $course)
                                                    <option value="{{$course->id}}"> {{ $course->course_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="Subject Name" class="control-label">Subject Name</label>
                                            <select class="custom-select mr-sm-2 subject_name" id="subject_name" name="subject_id" required="true">
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="Staff Name" class="control-label">Staff Name</label>
                                            <select class="custom-select mr-sm-2" id="staff_name" name="staff_id" required="true">
                                                <option selected>Choose...</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{ $staff->id }}">{{ $staff->fname }}</option>
                                                @endforeach
                                            </select>
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
                                            <label for="Course Name" class="control-label">Course Name</label>
                                            <select class="custom-select mr-sm-2 course_name" id="edit_course_name" name="course_id" required="true">
                                                <option selected>Choose...</option>
                                                @foreach($courses as $course)
                                                    <option value="{{$course->id}}"> {{ $course->course_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="Subject Name" class="control-label">Subject Name</label>
                                            <select class="custom-select mr-sm-2 subject_name" id="edit_subject_name" name="subject_id" required="true">
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="Staff Name" class="control-label">Staff Name</label>
                                            <select class="custom-select mr-sm-2" id="edit_staff_name" name="staff_id" required="true">
                                                <option selected>Choose...</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{ $staff->id }}">{{ $staff->fname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" id="hiddenId"/>
                                    <input type="hidden" name="department_id" value="{{ Request::segment(3) }}">
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
                         "url": "{{ route('admin.s-s.getData') }}",
                         "dataType": "json",
                         "type": "POST",
                         "data":{ _token: "{{csrf_token()}}"}
                       },
                "columns": [
                    { "data": "id" },
                    { "data": "course" },
                    { "data": "subject_code" },
                    { "data": "subject_name" },
                    { "data": "staff_code" },
                    { "data": "staff_name"},
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
                        url : "{{ route('admin.s-s.store') }}",
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
                    url : "{{ route('admin.s-s.delete') }}", 
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
                    url : "{{ route('admin.s-s.edit') }}",                
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
                               $('#edit_staff_name').val(value.staff_id);
                               $('#edit_subject_name').val(value.subject_id);
                               $('#edit_course_name').val(value.course_id);
                              
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
                    url : "{{ route('admin.s-s.update') }}",
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

        $(".course_name").on('change', function(){
           var course_id = $(this).val();
           console.log(course_id);
            if(course_id) {
                $.ajax({
                    url: '/admin/ajax/'+ course_id +'/subject',
                    type:"GET",
                    dataType:"json",
                    beforeSend: function(){
                         $('#myPleaseWait').modal('show');
                    },

                    success:function(data) {
                        console.log(data);
                        $('.subject_name').empty();
                        $.each(data, function(key, value){
                            $('.subject_name').append('<option value="'+ key +'">' + value + '</option>');
                        });
                    },
                    complete: function(){
                         $('#myPleaseWait').modal('hide');
                    }
                });
            } else {
            $('.subject_name').empty();
            }
        });
    </script>




@endsection

