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
                        <h4 class="page-title">Department</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Department</li>
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
                                <h4 class="card-title">Departments</h4>
                               
                                <div class="table-responsive">
                                    <table id="table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Department Name</th>
                                                <th>HOD</th>
                                                <th>Logo</th>
                                                <th> No. of Courses</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($lists as $list)
                                                <tr>
                                                    <td> {{ $list->id }}</td>
                                                    <td> {{ $list->department_name }}</td>
                                                    @if( !empty($list->user[0]->fname) )
                                                    <td> {{ $list->user[0]->fname }} {{ $list->user[0]->lname }}</td>
                                                    @else
                                                    <td> Not Assigned </td>
                                                    @endif
                                                    <td> <img src="{{asset($list->logo_url)}}" width="150px"></td>
                                                    <td> {{ count($list->course) }}</td>
                                                    <td> <a href="{{ route('admin.s-s',$list->id) }}" class="btn btn-primary btn-xs" title="View Courses"><i class="ti-layers"></i></a></td>
                                                </tr>
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

