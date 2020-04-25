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
                        <div class="user-pic"><img src=" {{ Auth::guard()->user()->profpic_url }}" alt="users" class="rounded-circle" width="40" /></div>
                        <div class="user-content hide-menu m-l-10">
                            <a href="javascript:void(0)" class="" id="Userdd" role="button"  aria-haspopup="true" aria-expanded="false">
                                <h5 class="m-b-0 user-name font-medium">{{ Auth::guard()->user()->name }} </h5>
                                <span class="op-5 user-email">{{ Auth::guard()->user()->email }}</span>
                            </a>
                       
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>
                
             
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Time Chart </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <!-- <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Date with Day Order </span></a></li> -->
                        <li class="sidebar-item"><a href="{{ route('staff.schedules') }}" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> My Schedules </span></a></li>
                        
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Hall Allocation </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('staff.hall.index') }}" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> View All Allocations </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('staff.hall.create') }}" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> Book New </span></a></li>
                       
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-bookmark-plus-outline"></i><span class="hide-menu">Students</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        
                        <li class="sidebar-item"><a href="{{ route('staff.students','I M.Sc.SS') }}" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> I M.Sc. SS</span></a></li>
                        <li class="sidebar-item"><a href="{{ route('staff.students','II M.Sc.SS') }}" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> II M.Sc. SS</span></a></li> 
                        <li class="sidebar-item"><a href="{{ route('staff.students','III M.Sc.SS') }}" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> III M.Sc. SS</span></a></li> 
                        <li class="sidebar-item"><a href="{{ route('staff.students','IV M.Sc.SS') }}" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> IV M.Sc. SS</span></a></li> 
                        <li class="sidebar-item"><a href="{{ route('staff.students','V M.Sc.SS') }}" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> V M.Sc. SS</span></a></li>  
                    </ul> 
                </li>
                <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-gradient"></i><span class="hide-menu">Hall Allocations </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="app-chats.html" class="sidebar-link"><i class="mdi mdi-comment-processing-outline"></i><span class="hide-menu"> Chats Apps </span></a></li>
                        <li class="sidebar-item"><a href="app-calendar.html" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Calender </span></a></li>
                        <li class="sidebar-item"><a href="app-taskboard.html" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Taskboard </span></a></li>
                    </ul>
                </li> -->
                <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Resources</span></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu"> View Resources </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{route('staff.subject.index')}}" class="sidebar-link"><i class="mdi mdi-toggle-switch"></i><span class="hide-menu"> Subjects</span></a></li>
                        <li class="sidebar-item"><a href="{{ route('staff.staff.index') }}" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Staffs </span></a></li>
                    </ul>
                </li>
                
           
                
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="" aria-expanded="false"><i class="mdi mdi-content-paste"></i><span class="hide-menu">Profile</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" aria-expanded="false"  onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span></a></li>

                

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->