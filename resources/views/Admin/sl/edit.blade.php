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
                                <h4 class="card-title">Master Data</h4>
                                    <form  id="addForm" enctype="multipart/form-data" method="post" action="{{route('admin.sl.update',$record->id)}}">
                                <div class="modal-body">
                                    @csrf
                                        <div class="form-group">
                                            <label for="day_order" class="control-label">Day Order</label>
                                            <select class="custom-select mr-sm-2" id="day_order" name="day_order" required="true">
                                                <option value="{{ $record->day_order }}" selected>{{ $record->day_order }}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="class_name" class="control-label">Class Name</label>
                                            <select class="custom-select mr-sm-2" id="class_name" name="class_name" value="{{ $record->class }}">
                                                <option value="{{ $record->class }}" selected>{{ $record->class }}</option>
                                                <option value="I M.Sc.SS">I M.Sc.SS</option>
                                                <option value="II M.Sc.SS">II M.Sc.SS</option>
                                                <option value="III M.Sc.SS">III M.Sc.SS</option>
                                                <option value="IV M.Sc.SS">IV M.Sc.SS</option>
                                                <option value="V M.Sc.S5">V M.Sc.SS</option>
                                            </select>
                                        </div>
                                        


                                        <div class="form-group">
                                            <label for="s1" class="control-label">Session 1</label>
                                            <select class="custom-select mr-sm-2 sessions" id="s1" name="s1" value="{{ $record->session_1 }}">
                                                <option value="{{$record->session_1}}" selected>{{ $record->session1->subject_name }}</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s1" class="control-label">Staff for Session 1</label>
                                            <select class="custom-select mr-sm-2 " id="ss1" name="ss1"  value="{{ $record->staff_1 }}">
                                                <option value="{{ $record->staff_1 }}" selected>{{ $record->ss1->name }}</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{$staff->id}}">{{ $staff->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s2" class="control-label">Session 2</label>
                                            <select class="custom-select mr-sm-2 sessions" id="s2" name="s2" value="{{$record->session_2}}">
                                                <option value="{{$record->session_2}}" selected>{{ $record->session2->subject_name }}</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s1" class="control-label">Staff for Session 2</label>
                                            <select class="custom-select mr-sm-2 " id="ss2" name="ss2"  value="{{ $record->staff_2 }}">
                                                 <option value="{{ $record->staff_2 }}" selected>{{ $record->ss2->name }}</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{$staff->id}}">{{ $staff->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s3" class="control-label">Session 3</label>
                                            <select class="custom-select mr-sm-2 sessions" id="s3" name="s3"  value="{{$record->session_3}}">
                                                <option value="{{$record->session_3}}" selected>{{ $record->session3->subject_name }}</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s1" class="control-label">Staff for Session 3</label>
                                            <select class="custom-select mr-sm-2 " id="ss3" name="ss3"  value="{{ $record->staff_3 }}">
                                                 <option value="{{ $record->staff_3 }}" selected>{{ $record->ss3->name }}</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{$staff->id}}">{{ $staff->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s4" class="control-label">Session 4</label>
                                            <select class="custom-select mr-sm-2 sessions" id="s4" name="s4" value="{{$record->session_4}}">
                                                <option value="{{$record->session_4}}" selected>{{ $record->session4->subject_name }}</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s1" class="control-label">Staff for Session 4</label>
                                            <select class="custom-select mr-sm-2 " id="ss4" name="ss4"  value="{{ $record->staff_4 }}">
                                                 <option value="{{ $record->staff_4 }}" selected>{{ $record->ss4->name }}</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{$staff->id}}">{{ $staff->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s5" class="control-label">Session for Session 5</label>
                                            <select class="custom-select mr-sm-2 sessions" id="s5" name="s5"  value="{{$record->session_5}}">
                                                <option value="{{$record->session_5}}" selected>{{ $record->session5->subject_name }}</option>
                                               
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="s1" class="control-label">Staff 5</label>
                                            <select class="custom-select mr-sm-2 " id="ss5" name="ss5"  value="{{ $record->staff_5 }}">
                                                 <option value="{{ $record->staff_5 }}" selected>{{ $record->ss5->name }}</option>
                                                @foreach($staffs as $staff)
                                                    <option value="{{$staff->id}}">{{ $staff->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" value="{{ $record->id }}">
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


<script type="text/javascript">
        $("#class_name").on('change', function(){
           var class_name = $(this).val();
           console.log(class_name);
            if(class_name) {
                $.ajax({
                    url: '/admin/master/ajax/'+ class_name +'/courses',
                    type:"GET",
                    dataType:"json",
                    beforeSend: function(){
                         $('#myPleaseWait').modal('show');
                    },

                    success:function(data) {
                        console.log(data);
                        $('.sessions').empty();
                        $.each(data, function(key, value){
                            $('.sessions').append('<option value="'+ key +'">' + value + '</option>');
                        });
                    },
                    complete: function(){
                         $('#myPleaseWait').modal('hide');
                    }
                });
            } else {
            $('.sessions').empty();
            }
        });
</script>



@endsection

