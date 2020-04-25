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
                        <h4 class="page-title">Subjects</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Subjects</li>
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
                                <h4 class="card-title">Subject</h4>
                                    <form  id="addForm" enctype="multipart/form-data" method="post" action="{{route('admin.subjects.store')}}">
                                <div class="modal-body">
                                    @csrf
                                        <div class="form-group">
                                            <label for="subject_no" class="control-label">Subject No</label>
                                            <input type="text" class="form-control" id="subject_no" name="subject_no" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject_name" class="control-label">Subject Name</label>
                                            <input type="text" class="form-control" id="subject_name" name="subject_name">
                                        </div>


                                        <div class="form-group">
                                            <label for="designation" class="control-label">Staff Name</label>
                                            <select class="custom-select mr-sm-2" id="staff_id" name="staff_id" required="true">
                                                <option value="" selected>Choose...</option>
                                                @foreach($staffs as $staff)
                                                <option value="{{ $staff->id }}"> {{ $staff->name }} ( {{$staff->staff_roll}} )</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="designation" class="control-label">Course</label>
                                            <select class="custom-select mr-sm-2" id="course" name="course" required="true">
                                                <option value="" selected>Choose...</option>
                                                <option value="I M.Sc.SS"> I M.Sc.SS</option>
                                                <option value="II M.Sc.SS"> II M.Sc.SS</option>
                                                <option value="III M.Sc.SS"> III M.Sc.SS</option>
                                                <option value="IV M.Sc.SS"> IV M.Sc.SS</option>
                                                <option value="V M.Sc.SS"> V M.Sc.SS</option>
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

