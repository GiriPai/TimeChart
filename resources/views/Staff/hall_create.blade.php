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
                    <h4 class="page-title">Date and Day</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('staff.home') }}">Home</a></li>
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
                           
                            <form  id="addForm" enctype="multipart/form-data" method="post" action="{{ route('staff.book.store') }}">
                            <div class="modal-body">
                                @if (Session::has('msg'))
                                   <div class="alert alert-info">{{ Session::get('msg') }}</div>
                                @endif
                                @csrf
                                <div class="form-group">
                                        <label for="hall_name" class="control-label">Hall Name</label>
                                        <select class="custom-select mr-sm-2" id="hall_id" name="hall_id" required="true">
                                            <option value="" selected>Choose...</option>
                                            @foreach($halls as $hall)
                                            <option value="{{$hall->id}}"> {{  $hall->hall_name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Date" class="control-label">Date</label>
                                        <input type="date" class="form-control" id="date" name="date" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="Date" class="control-label">From</label>
                                        <input type="time" class="form-control" id="from" name="from" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="Date" class="control-label">Date</label>
                                        <input type="time" class="form-control" id="to" name="to" required="true">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="event" class="control-label">Event</label>
                                        <input type="text" class="form-control" id ="event" name="event">
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
            </div>


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