@extends('Staff.layouts.master')
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
                                    <li class="breadcrumb-item"><a href="{{ route('staff.home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Students</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                    <!-- <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <button type="button" class="btn btn-success" ><i class="fa fa-plus-circle"></i> Add Staff</button>
                        </div>
                    </div> -->
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
                                <h4 class="card-title">Students</h4>
                                    <form  id="addForm" enctype="multipart/form-data" method="post" action="{{route('staff.student.store')}}">
                                <div class="modal-body">
                                    @csrf
                                        <div class="form-group">
                                            <label for="staff_roll" class="control-label">Student Roll</label>
                                            <input type="text" class="form-control" id="roll_no" name="roll_no" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="fname" class="control-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <input type="hidden" name="course" value="{{ $class }}">

                                        <div class="form-group">
                                            <label for="course" class="control-label">Gender</label>
                                            <select class="custom-select mr-sm-2" id="gender" name="gender" required="true">
                                                <option value=""> Select </option>
                                                <option value="Male"> Male</option>
                                                <option value="Female"> Female</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="address" class="control-label">Address</label>
                                            <textarea class="form-control" rows="3" name="address"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="control-label">E-Mail</label>
                                            <input type="email" class="form-control" id="email" name="email" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="phone_number" class="control-label">Phone Number</label>
                                            <input type="text" class="form-control" id="phone" name="phone" required="true">
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

                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="class" value="{{ Request::segment(2) }}">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                                </div>
                            </form>
                               
                            </div>
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






@endsection

