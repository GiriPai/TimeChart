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
                        <h4 class="page-title">Timechart</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Timechart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                   
                    <div class="col-7 align-self-center">
                        
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
                 <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <form method="POST" action="{{ route('admin.dd.store')}}">
                               @csrf
                                <div class="form-body">
                                    
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <input type="date" name="date" id="date" class="form-control">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    
                                                    <select class="form-control custom-select" name="day_order">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                  
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                                </div>
                                            </div>
                                            
                                            <!--/span-->
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- Row -->
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
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!empty($dd))

                                            @foreach($dd as $d)
                                            <tr>
                                                <td>{{ $d->date }} </td> 
                                                <td>{{ $d->day_order }} </td>
                                                <td> 
                                                    <a href="{{ route('admin.dd.delete',$d->id) }}"><button type="button" class="btn btn-danger waves-effect waves-light"> Delete</button></a>
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

