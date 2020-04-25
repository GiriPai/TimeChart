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
                        <h4 class="page-title">Subject</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('staff.home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sessions</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                    <!-- <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <button type="button" class="btn btn-success" ><i class="fa fa-plus-circle"></i><a href="{{ route('admin.subjects.insert') }}"> Add New Subject </a></button>
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

                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                                
                                <div class="col-sm-12 col-xs-12">
                                    <form class="input-form"  method = "Post" action="{{ route('staff.schedules.search') }}">
                                        <label class="control-label m-t-20">Search by Date</label>
                                        
                                                @csrf
                                                <div class="col-lg-12">
                                                    <div class="input-group mb-3">
                                                        <input type="date" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" name="date">
                                                        <div class="input-group-append">
                                                            <button type="submit" class="btn btn-info" type="button">Go!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                       
                                        
                                
                                        <!-- form-group -->
                                    </form>
                                </div>
                      
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sessions</h4>
                                   
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th>Subject No.</th>
                                                <th>Subject Name</th>
                                                <th>Staff</th>
                                                <th>Course</th> -->
                                             
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                           
                                            <tr>
                                                <td>Session 1 </td>
                                                <td> @if(!empty($sess1)) {{ $sess1->session1->subject_name }} @endif </td>
                                                <td> @if(!empty($sess1)) {{ $sess1->session1->course }} @endif </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Session 2</td>
                                                <td> @if(!empty($sess2)) {{ $sess2->session2->subject_name }} @endif </td>
                                                <td> @if(!empty($sess2)) {{ $sess2->session2->course }} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Session 3</td>
                                                <td> @if(!empty($sess3)) {{ $sess3->session3->subject_name }} @endif </td>
                                                <td> @if(!empty($sess3)) {{ $sess3->session3->course }} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Session 4</td>
                                                <td> @if(!empty($sess4)) {{ $sess4->session4->subject_name }} @endif </td>
                                                <td> @if(!empty($sess4)) {{ $sess4->session4->course }} @endif </td>
                                            </tr>

                                            <tr>
                                                <td>Session 5</td>
                                                <td> @if(!empty($sess5)) {{ $sess5->session5->subject_name }} @endif </td>
                                                <td> @if(!empty($sess5)) {{ $sess5->session5->course }} @endif </td>
                                            </tr>
                                          

                                        </tbody>
                                        
                                    </table>
                                </div>
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

