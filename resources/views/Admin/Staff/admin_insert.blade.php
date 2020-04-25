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
                                    <li class="breadcrumb-item active" aria-current="page">Staffs</li>
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
                                <h4 class="card-title">Staffs</h4>
                                    <form  id="addForm" enctype="multipart/form-data" method="post" action="{{route('admin.staff.store')}}">
                                <div class="modal-body">
                                    @csrf
                                        <div class="form-group">
                                            <label for="staff_roll" class="control-label">Staff Roll</label>
                                            <input type="text" class="form-control" id="staff_roll" name="staff_roll" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="fname" class="control-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>


                                        <div class="form-group">
                                            <label for="designation" class="control-label">Designation</label>
                                            <select class="custom-select mr-sm-2" id="designation" name="designation" required="true">
                                                <option value="" selected>Choose...</option>
                                                <option value="Head Of Department"> Head Of Department</option>
                                                <option value="Professor"> Professor</option>
                                                <option value="Assistant Professor"> Assistant Professor</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="address" class="control-label">Address</label>
                                            <textarea class="form-control" rows="3" name="address"></textarea>
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

