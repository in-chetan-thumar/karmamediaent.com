<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
            <a href="<?php echo e(route('root')); ?>" class="logo logo-dark">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/logo.png')); ?>" alt="" height="80">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/logo.png')); ?>" alt="" height="60">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="<?php echo e(route('root')); ?>" class="logo logo-light">
            <span class="logo-sm">
                <img src="<?php echo e(URL::asset('assets/images/logo.png')); ?>" alt="" height="80">
            </span>
            <span class="logo-lg">
                <img src="<?php echo e(URL::asset('assets/images/logo.png')); ?>" alt="" height="60">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('root')); ?>">
                        <span><?php echo app('translator')->get('translation.dashboards'); ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('movie.index')); ?>">
                        <span>Movies</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('webseries.index')); ?>">
                        <span>Webseries</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('news.index')); ?>">
                        <span>News</span>
                    </a>
                </li>
                <li class="menu-title"><span>Settings</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('permission.index')); ?>">
                        <span>Permission</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('roles.index')); ?>">
                        <span>Role</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?php echo e(route('usermanagements.index')); ?>">
                        <span>Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarPages">
                        <span data-key="t-pages">Message templates</span>
                    </a>
                    <div class="menu-dropdown collapse" id="sidebarPages" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?php echo e(route('email.templates')); ?>" class="nav-link" data-key="t-email">Email</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('sms.templates')); ?>" class="nav-link" data-key="t-sms">SMS</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('whatsapp.templates')); ?>" class="nav-link" data-key="t-whatsappp">WhatsApp</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<?php /**PATH D:\OSPanel\domains\karmamediaent.com\www\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>