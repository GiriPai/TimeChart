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
                        <h4 class="page-title">Time Chart</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Time Chart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                  <!--   <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                             <button type="button" class="btn btn-success" ><i class="fa fa-plus-circle"></i><a href="#"> Add New Data </a></button>
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
                                <h4 class="card-title">Time chart</h4>
                                   
                                <div class="table-responsive">
                                    <table id="file_export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Day Order</th>
                                                <th>Class</th>
                                                <th>Session 1</th>
                                                <th>Staff 1  </th>
                                                <th>Session 2</th>
                                                <th>Staff 2  </th>
                                                <th>Session 3</th>
                                                <th>Staff 3  </th>
                                                <th>Session 4</th>
                                                <th>Staff 4  </th>
                                                <th>Session 5</th>
                                                <th>Staff 5  </th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!empty($timechart))

                                            @foreach($timechart as $chart)
                                            <tr>
                                                <td>{{ $chart->date }}</td>
                                                <td>{{ $chart->day_order }} </td> 
                                                <td>{{ $chart->class }} </td>
                                                
                                                <td>{{ $chart->session1->subject_name}} </td>
                                                <td>{{ $chart->ss1->name}} </td>
                                                <td>{{ $chart->session2->subject_name }} </td> 
                                                <td>{{ $chart->ss2->name}} </td>
                                                <td>{{ $chart->session3->subject_name }} </td> 
                                                <td>{{ $chart->ss3->name}} </td>
                                                <td>{{ $chart->session4->subject_name }} </td>
                                                <td>{{ $chart->ss4->name}} </td> 
                                                <td>{{ $chart->session5->subject_name }} </td>
                                                <td>{{ $chart->ss5->name}} </td>
                                                <td> 
                                                    <a href="{{ route('admin.sl.edit',$chart->id) }}"><button type="button" class="btn btn-info waves-effect waves-light"> Edit</button></a>
                                                    <a href="{{ route('admin.sl.delete',$chart->id) }}"><button type="button" class="btn btn-danger waves-effect waves-light"> Delete</button></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr> No Timechart Exists </tr>
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

