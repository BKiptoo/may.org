<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{asset('backend/Messianic Assembly of Yahweh-logos/Messianic Assembly of Yahweh-logos_white.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MAY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">admin@mayministries.org</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{request() -> is('admin/dashboard') ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- My Account -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-circle nav-icon"></i>
                        <p>My Account</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-id-card nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-key nav-icon"></i>
                                <p>Credentials</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- Admins -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shield-alt nav-icon"></i>
                        <p>Admins</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>Add Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Admin List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Members -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Members</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Member List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Blog -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-rss nav-icon"></i>
                        <p>Blog</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-pencil-alt nav-icon"></i>
                                <p>Write a Post</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Post List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--Events -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-calendar-alt nav-icon"></i>
                        <p>Events</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add Event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-calendar-check nav-icon"></i>
                                <p>Event Calendar</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--Donations-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-donate nav-icon"></i>
                        <p>Donations</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Contribution List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-chart-bar nav-icon"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--Prayers-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-hands nav-icon"></i>
                        <p>Prayer Requests</p>
                    </a>
                </li>

                <!--Gallery-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-images nav-icon"></i>
                        <p>Media Gallery</p>
                    </a>
                </li>
                <!--Sermons-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-microphone-alt nav-icon"></i>
                        <p>Sermons</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-upload nav-icon"></i>
                                <p>Upload Sermon</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Sermon List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Sermons-->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bullhorn nav-icon"></i>
                        <p>Announcements</p>
                    </a>
                </li>
                <!-- Settings -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cogs nav-icon"></i>
                        <p>Settings</p>
                    </a>
                </li>


            </ul>
            <!-- Logout Button -->
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
                <form id="logout-form" action="#" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
