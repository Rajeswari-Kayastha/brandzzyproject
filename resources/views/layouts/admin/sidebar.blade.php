            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="{{ route('dashboard') }}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">User Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    
                                        <li>
                                            <a href="{{ route('admin.users.create') }}" class=""
                                                key="t-vertical">Create User</a>
                                        </li>                                    
                                    
                                        <li>
                                            <a href="{{ route('admin.users.index') }}" class=""
                                                key="t-horizontal">View Users</a>
                                        </li>                                    
                                    
                                        <li>
                                            <a href="{{ route('admin.roles.index') }}" class=""
                                                key="t-horizontal">Roles & Permissions</a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{ route('admin.roles.create') }}" class=""
                                                key="t-horizontal">Create New Role</a>
                                        </li> 
                                </ul>
                            </li>


                        </ul>

                        {{-- <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Contact</li>

                            <li>
                                <a href="{{ route('admin.contacts.index') }}" class="waves-effect">
                                    <i class='fas fa-phone-alt'></i>
                                    <span key="t-dashboards">View Contacts</span>
                                </a>
                            </li>

                        </ul> --}}

                        

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
