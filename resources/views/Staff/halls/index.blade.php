@extends('Staff.layouts.master')
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
                    <h4 class="page-title">Hall Allocations</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('staff.home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Allotments</li>
                            </ol>
                        </nav>
                    </div>  
                </div>
               
                <div class="col-7 align-self-center">
                    <div class="d-flex no-block justify-content-end align-items-center">
                        @if (Session::has('message'))
                           <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
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
                            <h4 class="card-title">All Allotments</h4>
                           
                            <div class="table-responsive">
                                <table id="file_export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Hall_Name</th>
                                            <th>Date</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Event</th>
                                            <th>Booked By</th>
                                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allotments as $a)
                                            <tr>
                                                <th>{{ $a->hall_name }}  </th>
                                                <th>{{ $a->date  }}</th>
                                                <th>{{ $a->from  }}</th>
                                                <th>{{ $a->to  }}</th>
                                                <th>{{ $a->event  }}</th>
                                                <th>{{ $a->user->name }} </th>
                                                                                              
                                        @endforeach
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