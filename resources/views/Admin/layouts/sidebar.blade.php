<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li>
                    <!-- User Profile-->
                    <div class="user-profile d-flex no-block dropdown m-t-20">
                        <div class="user-pic"><img src=" /assets/images/skasc.jpg" alt="users" class="rounded-circle" width="40" /></div>
                        <div class="user-content hide-menu m-l-10">
                            <a href="javascript:void(0)" class="" id="Userdd" role="button"  aria-haspopup="true" aria-expanded="false">
                                <h5 class="m-b-0 user-name font-medium">Admin </h5>
                                <span class="op-5 user-email">admin@gmail.com</span>
                            </a>
                       
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                
                <!-- User Profile-->
           
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Time Chart </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.dd.index') }}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Date with Day Order </span></a></li>
                <!--         <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Analytical </span></a></li> -->
                        
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.staff.index') }}" aria-expanded="false"><i class="mdi mdi-view-parallel"></i><span class="hide-menu">Staffs </span></a>
                   
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-content-copy"></i><span class="hide-menu">Students </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('admin.student.index','I M.Sc.SS') }}" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> I M.Sc.SS </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('admin.student.index','II M.Sc.SS') }}" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> II M.Sc.SS </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('admin.student.index','III M.Sc.SS') }}" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> III M.Sc.SS </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('admin.student.index','IV M.Sc.SS') }}" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> IV M.Sc.SS </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('admin.student.index','V M.Sc.SS') }}" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> V M.Sc.SS </span></a></li>
                    </ul>
                </li>


               
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.subjects.index') }}" aria-expanded="false"><i class="mdi mdi-view-parallel"></i><span class="hide-menu">Subjects </span></a>
                    
                </li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{route('admin.ds.index')}}" aria-expanded="false"><i class="mdi mdi-bookmark-plus-outline"></i><span class="hide-menu">Routine Time Chart Master</span></a>
                     
                </li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="{{ route('admin.halls.booking') }}" aria-expanded="false"><i class="mdi mdi-calendar"></i><span class="hide-menu">Hall Bookings</span></a>
                    
                </li>

                <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-calendar"></i><span class="hide-menu">Hall Allocations </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                       
                        <li class="sidebar-item"><a href="app-calendar.html" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Bookings </span></a></li>
                        
                    </ul>
                </li> -->

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->