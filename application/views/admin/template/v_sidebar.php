<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url() . 'assets/dist/img/AdminLTELogo.png' ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() . 'assets/dist/img/user2-160x160.jpg' ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
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
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <!-- Dashboard -->
                <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' ||
                                        $this->uri->segment(1) == 'dashboard2' ||
                                        $this->uri->segment(1) == 'dashboard3' ||
                                        $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'dashboard' ||
                                                    $this->uri->segment(1) == 'dashboard2' ||
                                                    $this->uri->segment(1) == 'dashboard3' ||
                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="dashboard" class="nav-link <?= $this->uri->segment(1) == 'dashboard' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v1</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="dashboard2" class="nav-link    <?= $this->uri->segment(1) == 'dashboard2' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="dashboard3" class="nav-link    <?= $this->uri->segment(1) == 'dashboard3' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- /Dashboard -->

                <!-- Widgets -->
                <li class="nav-item">
                    <a href="widgets" class="nav-link   <?= $this->uri->segment(1) == 'widgets' ||
                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <!-- /Widgets -->

                <!-- Layout -->
                <li class="nav-item <?= $this->uri->segment(1) == 'boxed' ||
                                        $this->uri->segment(1) == 'collapsed-sidebar' ||
                                        $this->uri->segment(1) == 'fixed-footer' ||
                                        $this->uri->segment(1) == 'fixed-sidebar' ||
                                        $this->uri->segment(1) == 'fixed-sidebar-custom' ||
                                        $this->uri->segment(1) == 'fixed-topnav' ||
                                        $this->uri->segment(1) == 'topnav-sidebar' ||
                                        $this->uri->segment(1) == 'topnav' ||
                                        $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'boxed' ||
                                                    $this->uri->segment(1) == 'collapsed-sidebar' ||
                                                    $this->uri->segment(1) == 'fixed-footer' ||
                                                    $this->uri->segment(1) == 'fixed-sidebar' ||
                                                    $this->uri->segment(1) == 'fixed-sidebar-custom' ||
                                                    $this->uri->segment(1) == 'fixed-topnav' ||
                                                    $this->uri->segment(1) == 'topnav-sidebar' ||
                                                    $this->uri->segment(1) == 'topnav' ||
                                                    $this->uri->segment(1) == '' ?  'active' : '' ?>">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Layout Options
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="top-nav" class="nav-link    <?= $this->uri->segment(1) == 'topnav' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="top-nav-sidebar" class="nav-link   <?= $this->uri->segment(1) == 'topnav-sidebar' ||
                                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation + Sidebar</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="boxed" class="nav-link <?= $this->uri->segment(1) == 'boxed' ||
                                                                $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Boxed</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="fixed-sidebar" class="nav-link <?= $this->uri->segment(1) == 'fixed-sidebar' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="fixed-sidebar-custom" class="nav-link  <?= $this->uri->segment(1) == 'fixed-sidebar-custom' ||
                                                                                $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p><small>Fixed Sidebar + Custom Area</small></p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="fixed-topnav" class="nav-link  <?= $this->uri->segment(1) == 'fixed-topnav' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="fixed-footer" class="nav-link  <?= $this->uri->segment(1) == 'fixed-footer' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="collapsed-sidebar" class="nav-link <?= $this->uri->segment(1) == 'collapsed-sidebar' ||
                                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collapsed Sidebar</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- /Layout -->

                <!-- Charts -->
                <li class="nav-item <?= $this->uri->segment(1) == 'chartjs' ||
                                        $this->uri->segment(1) == 'flot' ||
                                        $this->uri->segment(1) == 'inline' ||
                                        $this->uri->segment(1) == 'uplot' ||
                                        $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'chartjs' ||
                                                    $this->uri->segment(1) == 'flot' ||
                                                    $this->uri->segment(1) == 'inline' ||
                                                    $this->uri->segment(1) == 'uplot' ||
                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="chartjs" class="nav-link   <?= $this->uri->segment(1) == 'chartjs' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ChartJS</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="flot" class="nav-link      <?= $this->uri->segment(1) == 'flot' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Flot</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="inline" class="nav-link    <?= $this->uri->segment(1) == 'inline' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inline</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="uplot" class="nav-link     <?= $this->uri->segment(1) == 'uplot' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>uPlot</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- /Charts -->

                <!-- UI -->
                <li class="nav-item <?= $this->uri->segment(1) == 'button' ||
                                        $this->uri->segment(1) == 'generals' ||
                                        $this->uri->segment(1) == 'icons' ||
                                        $this->uri->segment(1) == 'modals' ||
                                        $this->uri->segment(1) == 'navbar' ||
                                        $this->uri->segment(1) == 'ribbons' ||
                                        $this->uri->segment(1) == 'sliders' ||
                                        $this->uri->segment(1) == 'timeline' ||
                                        $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'button' ||
                                                    $this->uri->segment(1) == 'generals' ||
                                                    $this->uri->segment(1) == 'icons' ||
                                                    $this->uri->segment(1) == 'modals' ||
                                                    $this->uri->segment(1) == 'navbar' ||
                                                    $this->uri->segment(1) == 'ribbons' ||
                                                    $this->uri->segment(1) == 'sliders' ||
                                                    $this->uri->segment(1) == 'timeline' ||
                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            UI Elements
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="generals" class="nav-link  <?= $this->uri->segment(1) == 'generals' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="icons" class="nav-link <?= $this->uri->segment(1) == 'icons' ||
                                                                $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Icons</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="button" class="nav-link    <?= $this->uri->segment(1) == 'button' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Buttons</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="sliders" class="nav-link   <?= $this->uri->segment(1) == 'sliders' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sliders</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="modals" class="nav-link    <?= $this->uri->segment(1) == 'modals' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Modals & Alerts</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="navbar" class="nav-link    <?= $this->uri->segment(1) == 'navbar' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Navbar & Tabs</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="timeline" class="nav-link  <?= $this->uri->segment(1) == 'timeline' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Timeline</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="ribbons" class="nav-link   <?= $this->uri->segment(1) == 'ribbons' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ribbons</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- /UI -->

                <!-- Forms -->
                <li class="nav-item <?= $this->uri->segment(1) == 'advanced' ||
                                        $this->uri->segment(1) == 'editors' ||
                                        $this->uri->segment(1) == 'general' ||
                                        $this->uri->segment(1) == 'validation' ||
                                        $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'advanced' ||
                                                    $this->uri->segment(1) == 'editors' ||
                                                    $this->uri->segment(1) == 'general' ||
                                                    $this->uri->segment(1) == 'validation' ||
                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="general" class="nav-link   <?= $this->uri->segment(1) == 'general' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General Elements</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="advanced" class="nav-link  <?= $this->uri->segment(1) == 'advanced' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Advanced Elements</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="editors" class="nav-link   <?= $this->uri->segment(1) == 'editors' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Editors</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="validation" class="nav-link    <?= $this->uri->segment(1) == 'validation' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Validation</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- /Forms -->

                <!-- Tables -->
                <li class="nav-item <?= $this->uri->segment(1) == 'data' ||
                                        $this->uri->segment(1) == 'jsgrid' ||
                                        $this->uri->segment(1) == 'simple' ||
                                        $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'data' ||
                                                    $this->uri->segment(1) == 'jsgrid' ||
                                                    $this->uri->segment(1) == 'simple' ||
                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="simple" class="nav-link    <?= $this->uri->segment(1) == 'simple' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="data" class="nav-link  <?= $this->uri->segment(1) == 'data' ||
                                                                $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DataTables</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="jsgrid" class="nav-link    <?= $this->uri->segment(1) == 'jsgrid' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>jsGrid</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- /Tables -->

                <!-- Examples -->
                <li class="nav-header">EXAMPLES</li>
                <!-- /Examples -->

                <!-- Calendar -->
                <li class="nav-item">
                    <a href="calendar" class="nav-link  <?= $this->uri->segment(1) == 'calendar' ||
                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <!-- /Calendar -->

                <!-- Gallery -->
                <li class="nav-item">
                    <a href="gallery" class="nav-link   <?= $this->uri->segment(1) == 'gallery' ||
                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <!-- /Gallery -->

                <!-- Kanban -->
                <li class="nav-item">
                    <a href="kanban" class="nav-link    <?= $this->uri->segment(1) == 'kanban' ||
                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Kanban Board
                        </p>
                    </a>
                </li>
                <!-- /Kanban -->

                <!-- Mailbox -->
                <li class="nav-item <?= $this->uri->segment(1) == 'compose' ||
                                        $this->uri->segment(1) == 'mailbox' ||
                                        $this->uri->segment(1) == 'read-mail' ||
                                        $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'compose' ||
                                                    $this->uri->segment(1) == 'mailbox' ||
                                                    $this->uri->segment(1) == 'read-mail' ||
                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="mailbox" class="nav-link   <?= $this->uri->segment(1) == 'mailbox' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="compose" class="nav-link   <?= $this->uri->segment(1) == 'compose' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="read-mail" class="nav-link     <?= $this->uri->segment(1) == 'read-mail' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- /Mailbox -->

                <!-- Pages -->
                <li class="nav-item <?= $this->uri->segment(1) == 'invoice' ||
                                        $this->uri->segment(1) == 'profile' ||
                                        $this->uri->segment(1) == 'e-commerce' ||
                                        $this->uri->segment(1) == 'projects' ||
                                        $this->uri->segment(1) == 'project-add' ||
                                        $this->uri->segment(1) == 'project-edit' ||
                                        $this->uri->segment(1) == 'project-detail' ||
                                        $this->uri->segment(1) == 'contacts' ||
                                        $this->uri->segment(1) == 'faq' ||
                                        $this->uri->segment(1) == 'contact-us' ||
                                        $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'invoice' ||
                                                    $this->uri->segment(1) == 'profile' ||
                                                    $this->uri->segment(1) == 'e-commerce' ||
                                                    $this->uri->segment(1) == 'projects' ||
                                                    $this->uri->segment(1) == 'project-add' ||
                                                    $this->uri->segment(1) == 'project-edit' ||
                                                    $this->uri->segment(1) == 'project-detail' ||
                                                    $this->uri->segment(1) == 'contacts' ||
                                                    $this->uri->segment(1) == 'faq' ||
                                                    $this->uri->segment(1) == 'contact-us' ||
                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="invoice" class="nav-link   <?= $this->uri->segment(1) == 'invoice' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="profile" class="nav-link   <?= $this->uri->segment(1) == 'profile' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="e-commerce" class="nav-link    <?= $this->uri->segment(1) == 'e-commerce' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>E-commerce</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="projects" class="nav-link  <?= $this->uri->segment(1) == 'projects' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="project-add" class="nav-link   <?= $this->uri->segment(1) == 'project-add' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="project-edit" class="nav-link  <?= $this->uri->segment(1) == 'project-edit' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="project-detail" class="nav-link    <?= $this->uri->segment(1) == 'project-detail' ||
                                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="contacts" class="nav-link  <?= $this->uri->segment(1) == 'contacts' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="faq" class="nav-link   <?= $this->uri->segment(1) == 'faq' ||
                                                                $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="contact-us" class="nav-link    <?= $this->uri->segment(1) == 'contact-us' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact us</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- /Pages -->

                <!-- Extras -->
                <li class="nav-item <?= $this->uri->segment(1) == 'login' ||
                                        $this->uri->segment(1) == 'register' ||
                                        $this->uri->segment(1) == 'forgot-password' ||
                                        $this->uri->segment(1) == 'recover-password' ||
                                        $this->uri->segment(1) == 'login-v2' ||
                                        $this->uri->segment(1) == 'register-v2' ||
                                        $this->uri->segment(1) == 'forgot-password-v2' ||
                                        $this->uri->segment(1) == 'recover-password-v2' ||
                                        $this->uri->segment(1) == 'lockscreen' ||
                                        $this->uri->segment(1) == 'legacy-user-menu' ||
                                        $this->uri->segment(1) == 'language-menu' ||
                                        $this->uri->segment(1) == 'not-found' ||
                                        $this->uri->segment(1) == 'internal-server' ||
                                        $this->uri->segment(1) == 'pace' ||
                                        $this->uri->segment(1) == 'blank' ||
                                        $this->uri->segment(1) == 'starter' ||
                                        $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'login' ||
                                                    $this->uri->segment(1) == 'register' ||
                                                    $this->uri->segment(1) == 'forgot-password' ||
                                                    $this->uri->segment(1) == 'recover-password' ||
                                                    $this->uri->segment(1) == 'login-v2' ||
                                                    $this->uri->segment(1) == 'register-v2' ||
                                                    $this->uri->segment(1) == 'forgot-password-v2' ||
                                                    $this->uri->segment(1) == 'recover-password-v2' ||
                                                    $this->uri->segment(1) == 'lockscreen' ||
                                                    $this->uri->segment(1) == 'legacy-user-menu' ||
                                                    $this->uri->segment(1) == 'language-menu' ||
                                                    $this->uri->segment(1) == 'not-found' ||
                                                    $this->uri->segment(1) == 'internal-server' ||
                                                    $this->uri->segment(1) == 'pace' ||
                                                    $this->uri->segment(1) == 'blank' ||
                                                    $this->uri->segment(1) == 'starter' ||
                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item <?= $this->uri->segment(1) == 'login' ||
                                                $this->uri->segment(1) == 'register' ||
                                                $this->uri->segment(1) == 'forgot-password' ||
                                                $this->uri->segment(1) == 'recover-password' ||
                                                $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                            <a href="#" class="nav-link <?= $this->uri->segment(1) == 'login' ||
                                                            $this->uri->segment(1) == 'register' ||
                                                            $this->uri->segment(1) == 'forgot-password' ||
                                                            $this->uri->segment(1) == 'recover-password' ||
                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Login & Register v1
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="login" class="nav-link <?= $this->uri->segment(1) == 'login' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login v1</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="register" class="nav-link  <?= $this->uri->segment(1) == 'register' ||
                                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register v1</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="forgot-password" class="nav-link   <?= $this->uri->segment(1) == 'forgot-password' ||
                                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password v1</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="recover-password" class="nav-link  <?= $this->uri->segment(1) == 'recover-password' ||
                                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password v1</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item <?= $this->uri->segment(1) == 'login-v2' ||
                                                $this->uri->segment(1) == 'register-v2' ||
                                                $this->uri->segment(1) == 'forgot-password-v2' ||
                                                $this->uri->segment(1) == 'recover-password-v2' ||
                                                $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                            <a href="#" class="nav-link <?= $this->uri->segment(1) == 'login-v2' ||
                                                            $this->uri->segment(1) == 'register-v2' ||
                                                            $this->uri->segment(1) == 'forgot-password-v2' ||
                                                            $this->uri->segment(1) == 'recover-password-v2' ||
                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Login & Register v2
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="login-v2" class="nav-link  <?= $this->uri->segment(1) == 'login-v2' ||
                                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login v2</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="register-v2" class="nav-link   <?= $this->uri->segment(1) == 'register-v2' ||
                                                                                $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register v2</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="forgot-password-v2" class="nav-link    <?= $this->uri->segment(1) == 'forgot-password-v2' ||
                                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password v2</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="recover-password-v2" class="nav-link   <?= $this->uri->segment(1) == 'recover-password-v2' ||
                                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password v2</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="lockscreen" class="nav-link    <?= $this->uri->segment(1) == 'lockscreen' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lockscreen</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="legacy-user-menu" class="nav-link  <?= $this->uri->segment(1) == 'legacy-user-menu' ||
                                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Legacy User Menu</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="language-menu" class="nav-link <?= $this->uri->segment(1) == 'language-menu' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Language Menu</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="not-found" class="nav-link <?= $this->uri->segment(1) == 'not-found' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 404</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="internal-server" class="nav-link   <?= $this->uri->segment(1) == 'internal-server' ||
                                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 500</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pace" class="nav-link  <?= $this->uri->segment(1) == 'pace' ||
                                                                $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pace</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="blank" class="nav-link <?= $this->uri->segment(1) == 'blank' ||
                                                                $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blank Page</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="starter" class="nav-link   <?= $this->uri->segment(1) == 'starter' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Starter Page</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- /Extras -->

                <!-- Search -->
                <li class="nav-item <?= $this->uri->segment(1) == 'simples' ||
                                        $this->uri->segment(1) == 'enhanced' ||
                                        $this->uri->segment(1) == 'simple-results' ||
                                        $this->uri->segment(1) == 'enhanced-results' ||
                                        $this->uri->segment(1) == '' ? 'menu-open' : '' ?>">

                    <a href="#" class="nav-link <?= $this->uri->segment(1) == 'simples' ||
                                                    $this->uri->segment(1) == 'enhanced' ||
                                                    $this->uri->segment(1) == 'simple-results' ||
                                                    $this->uri->segment(1) == 'enhanced-results' ||
                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-search"></i>
                        <p>
                            Search
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="simples" class="nav-link    <?= $this->uri->segment(1) == 'simples' ||
                                                                        $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Search</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="enhanced" class="nav-link  <?= $this->uri->segment(1) == 'enhanced' ||
                                                                    $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enhanced</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="simple-results" class="nav-link    <?= $this->uri->segment(1) == 'simple-results' ||
                                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Result</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="enhanced-results" class="nav-link  <?= $this->uri->segment(1) == 'enhanced-results' ||
                                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Enhanced Result</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- /Search -->

                <!-- MISCELLANEOUS -->
                <li class="nav-header">MISCELLANEOUS</li>
                <!-- /MISCELLANEOUS -->

                <!-- Iframe -->
                <li class="nav-item">
                    <a href="iframe" class="nav-link    <?= $this->uri->segment(1) == 'iframe' ||
                                                            $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-ellipsis-h"></i>
                        <p>Tabbed IFrame Plugin</p>
                    </a>
                </li>
                <!-- /Iframe -->

                <!-- Documentation -->
                <li class="nav-item">
                    <a href="https://adminlte.io/docs/3.1/" class="nav-link <?= $this->uri->segment(1) == 'https://adminlte.io/docs/3.1/' ||
                                                                                $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                    </a>
                </li>
                <!-- /Documentation -->

                <!-- MULTI LEVEL EXAMPLE -->
                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                <!-- /MULTI LEVEL EXAMPLE -->

                <!-- Level -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <!-- /Level -->

                <!-- Level -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Level 1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Level -->

                <!-- Level -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Level 1</p>
                    </a>
                </li>
                <!-- /Level -->

                <!-- Labels -->
                <li class="nav-header">LABELS</li>
                <!-- /Labels -->

                <!-- Important -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <!-- /Importan -->

                <!-- Warning -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <!-- /Warning -->

                <!-- Informational -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
                <!-- /Informational -->

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>