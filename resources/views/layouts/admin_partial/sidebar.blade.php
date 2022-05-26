<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
            alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            ড্যাসবোর্ড
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Route::is('freelancer.active') || Route::is('freelancer.deactive') || Route::is('freelancer.total') || Route::is('supervisor.active') || Route::is('supervisor.deActive') || Route::is('supervisor.total') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            রে‌জি:তা‌লিকা
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Route::is('supervisor.active') || Route::is('supervisor.deActive') || Route::is('supervisor.total') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Route::is('supervisor.active') || Route::is('supervisor.deActive') || Route::is('supervisor.total') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    সুপারভাইজার
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route("supervisor.active") }}" class="nav-link {{ Route::is('supervisor.active') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("supervisor.deActive") }}" class="nav-link {{ Route::is('supervisor.deActive') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Deactive</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("supervisor.total") }}" class="nav-link {{ Route::is('supervisor.total') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Total</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ Route::is('freelancer.active') || Route::is('freelancer.deactive') || Route::is('freelancer.total') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Route::is('freelancer.active') || Route::is('freelancer.deactive') || Route::is('freelancer.total') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    ফ্রীলান্সার
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route("freelancer.active") }}" class="nav-link {{ Route::is('freelancer.active') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("freelancer.deactive") }}" class="nav-link {{ Route::is('freelancer.deactive') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Deactive</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("freelancer.total") }}" class="nav-link {{ Route::is('freelancer.total') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Total</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            কাজ আপ‌লোড
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-credit-card"></i>
                        <p>
                            কা‌জের রেট
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-fast-forward""></i>
              <p>
                অফার সেন্ড
              </p>
            </a>
          </li>
          <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-desktop"></i>
                                <p>
                                    কাজ ম‌নিট‌রিং
                                </p>
                            </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-flag"></i>
                        <p>
                            কা‌জের রি‌পোর্ট
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ Route::is('supervisor.moneywithdraw') || Route::is('supervisor.moneywithdraw.paid') || Route::is('supervisor.moneywithdraw.reject') || Route::is('supervisor.active') || Route::is('supervisor.deActive') || Route::is('supervisor.total') ? 'menu-is-opening menu-open' : '' }}">
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-credit-card"></i>
                        <p>
                            টাকা উ‌ত্তোলন
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ Route::is('supervisor.moneywithdraw') || Route::is('supervisor.moneywithdraw.paid') || Route::is('supervisor.moneywithdraw.reject') || Route::is('supervisor.active') || Route::is('supervisor.deActive') || Route::is('supervisor.total') ? 'menu-is-opening menu-open' : '' }}">
                            <a href="" class="nav-link {{ Route::is('supervisor.moneywithdraw') || Route::is('supervisor.moneywithdraw') || Route::is('supervisor.moneywithdraw.paid') || Route::is('supervisor.moneywithdraw.reject') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>সুপারভাইজার</p>
                                <i class="fas fa-angle-right right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route("supervisor.moneywithdraw") }}" class="nav-link {{ Route::is('supervisor.moneywithdraw') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Supervisor</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("supervisor.moneywithdraw.paid") }}" class="nav-link {{ Route::is('supervisor.moneywithdraw.paid') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Paid List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("supervisor.moneywithdraw.reject") }}" class="nav-link {{ Route::is('supervisor.moneywithdraw.reject') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reject List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ফ্রীলান্সার</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-rocket"></i>
                        <p>
                            ‌লেন‌দেন তা‌লিকা
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-credit-card"></i>
                        <p>
                            ‌রিওয়ার্ড মা‌নি সেন্ড
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            ‌পে‌মেন্ট তথ‌্য
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            ‌সাইট সেটআপ
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
            </ul>
          </li> --}}
                <li class="nav-header">Setting</li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" {{ __('Logout') }} class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">LogOut</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
