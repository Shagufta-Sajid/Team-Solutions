<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">TeamSolutions</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('admin.dashboard') }}" class="d-block">TeamSolutions</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fa-solid fa-house"></i>
                        <p>
                            Administrator
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <!-- <i class="fa-solid fa-person"></i> -->
                        <i class="fa-solid fa-users-line"></i>
                        <p>
                            Employee
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show.employees')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Employee</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('employee.attend.list') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Attendance List</p>
                            </a>
                        </li>
                    </ul>
                </li>


                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-envelope"></i>
                        <p>
                            Department
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show.departments')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Department</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <p>
                            Designation
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show.designations')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Designation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-pen-to-square"></i>
                        <p>
                            Tran With
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show.tranwith')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Tran With</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>
                            Location
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show.locations')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Location</p>
                            </a>
                        </li>
                    </ul>
                </li>

               
               

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-right-left"></i>
                        <p>
                            Payroll
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('show.payroll.setup')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payroll Setup</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('show.payroll')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payroll</p>
                            </a>
                        </li>
                    </ul>
                </li>

                
                

                

                

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>