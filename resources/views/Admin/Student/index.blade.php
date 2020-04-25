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
                                    <li class="breadcrumb-item active" aria-current="page">Students</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                   <!--  <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <button type="button" class="btn btn-success" ><i class="fa fa-plus-circle"></i><a href="{{ route('admin.student.insert') }}"> Add New Student </a></button>
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
                                <h4 class="card-title">Students</h4>
                                   
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Roll No</th>
                                                <th>Name</th>
                                                
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!empty($students))
                                            @foreach($students as $student)
                                            <tr>
                                                <td>{{ $student->roll_no }} </td> 
                                                <td>{{ $student->name }} </td> 
                                                
                                                <td>{{ $student->email }} </td> 
                                                <td>{{ $student->phone_number }} </td> 
                                                <td> 
                                                    <a href="{{ route('admin.student.show',$student->id) }}"><button type="button" class="btn btn-info waves-effect waves-light"> View Info</button></a>
                                                   <!--  <a href="{{ route('admin.student.delete',$student->id) }}"><button type="button" class="btn btn-danger waves-effect waves-light"> Delete</button></a></td> -->
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr> No students Exists </tr>
                                            @endif
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

