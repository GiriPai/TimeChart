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
                        <h4 class="page-title">Class Logs</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Class Logs</li>
                                </ol>
                            </nav>
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
                                <h4 class="card-title">Class Logs</h4>
                               
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Date</th>
                                                <th>Day Order</th>
                                                <th>Session 1</th>
                                                <th>Session 2</th>
                                                <th>Session 3</th>
                                                <th>Session 4</th>
                                                <th>Session 5</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($logs as $log)
                                                <tr>
                                                    <td> {{ $log->id }}</td>
                                                    <td> {{ $log->date }}</td>
                                                    <td> {{ $log->order}}</td>
                                                    <td> {{ $log->s1}}</td>
                                                    <td> {{ $log->s2}}</td>
                                                    <td> {{ $log->s3}}</td>
                                                    <td> {{ $log->s4}}</td>
                                                    <td> {{ $log->s5}}</td>
                                                    
                                                </tr>
                                            @endforeach 
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                              {{ $logs->links() }}
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->

            </div>

            <div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Date and Day Orders</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                        
                            <div class="modal-body">
                               <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Date</th>
                                                <th>Day Order</th>
                                               
                                                <th>Session 1</th>
                                                <th>Session 2</th>
                                                <th>Session 3</th>
                                                <th>Session 4</th>
                                                <th>Session 5</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                             @foreach($logs as $log)
                                                <tr>
                                                    <td> {{ $log->id }}</td>
                                                    <td> {{ $log->date }}</td>
                                                    <td> {{ $log->order}}</td>
                                                    <td> {{ $log->s1}}</td>
                                                    <td> {{ $log->s2}}</td>
                                                    <td> {{ $log->s3}}</td>
                                                    <td> {{ $log->s4}}</td>
                                                    <td> {{ $log->s5}}</td>
                                                    
                                                </tr>
                                            @endforeach 
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
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

