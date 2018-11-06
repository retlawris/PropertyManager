<style>
    .table-block{margin-top:20px}
    .table-block table{border-collapse:collapse;margin:0;padding:0;width:100%;table-layout:fixed}
    /*.table-block :hover{box-shadow:0px 5px 43px rgba(0,0,0,0.18) !important}*/
    .table-block table th{font-size:.65rem !important;font-weight:700;color:#4a4a4a}
    .table-block table td{font-size:.75rem;font-weight:600;color:#828282;padding:.825rem .625em !important}
    .table-block table tr{background:#fcfcfc;border-bottom:1px solid #ededed;padding:.35em}
    .table-block table th,.table-block table td{padding:.625em;text-align:center}
    .table-block table th{font-size:.85em;letter-spacing:.1em;text-transform:uppercase}

    .table-block .tag {
        margin: 10px 0 0 45px;
    }

    @media screen and (max-width: 600px){
        .table-block table{border:0}
        .table-block table caption{font-size:1.3em}
        .table-block table thead{border:none;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}
        .table-block table tr{border-bottom:3px solid #ddd;display:block;margin-bottom:.625em}
        .table-block table td{border-bottom:1px solid #ddd;display:block;font-size:.8em;text-align:right}
        .table-block table td:before{content:attr(data-label);float:left;font-weight:bold;text-transform:uppercase}
        .table-block table td:last-child{border-bottom:0}
    }SS

    .is-account-grid {
        margin-top:20px
    }

    .dashboard-container {
        display: flex;
        flex-flow: row wrap;
    }

    .quick-action, .activities {
        margin-top: 50px;
    }

    .quick-action, .activities {
        float: right;
    }
</style>

<nav class="navbar mobile-navbar is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
    <!-- Brand -->
    <div class="navbar-brand">
        <a class="navbar-item" href="home.html">
            <img src="assets/images/logo/nephos.svg" alt="">
        </a>

        <!-- Sidebar mode toggler icon -->
        <a id="sidebar-mode" class="navbar-item is-icon is-sidebar-toggler" href="javascript:void(0);">
            <i data-feather="sidebar"></i>
        </a>

        <!-- Mobile menu toggler icon -->
        <div class="navbar-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Navbar mobile menu -->
    <div class="navbar-menu">
        <!-- Account -->
        <div class="navbar-item has-dropdown">
            <a class="navbar-link">
                <img src="assets/images/avatars/elie.jpg" alt="">
                <span class="is-heading">Elie Daniels</span>
            </a>

            <!-- Mobile Dropdown -->
            <div class="navbar-dropdown">
                <a href="cart.html" class="navbar-item is-flex">
                    <span>Cart</span>
                    <!-- Number of items in Cart -->
                    <span class="menu-badge">3</span>
                </a>
                <a href="account.html" class="navbar-item">Account</a>
                <a href="wishlist.html" class="navbar-item">Wishlist</a>
                <a href="account-edit.html" class="navbar-item">Settings</a>
                <a href="authentication.html" class="navbar-item">Log out</a>
            </div>
        </div>

        <!-- More -->
            <div class="navbar-item has-dropdown">
            <a class="navbar-link">
                <i data-feather="grid"></i>
                <span class="is-heading">Categories</span>
            </a>

            <!-- Mobile Dropdown -->
            <div class="navbar-dropdown">
                <a href="products.html" class="navbar-item">House</a>
                <a href="products.html" class="navbar-item">Office</a>
                <a href="products.html" class="navbar-item">Kids</a>
                <a href="products.html" class="navbar-item">Kitchen</a>
                <a href="products.html" class="navbar-item">Accessories</a>
            </div>
        </div>
    </div>
</nav>

<!-- FAB -->
<div id="quickview-trigger"  class="menu-fab is-hidden-mobile">
    <a class="hamburger-btn" href="javascript:void(0);">
                <span class="menu-toggle">
                    <span class="icon-box-toggle">
                        <span class="rotate">
                            <i class="icon-line-top"></i>
                            <i class="icon-line-center"></i>
                            <i class="icon-line-bottom"></i>
                        </span>
                    </span>
                </span>
    </a>
</div><!-- /FAB -->

<!-- Categories Right quickview -->
<div class="category-quickview">
    <div class="inner">
        <ul class="category-menu">
            <li><a href="#">Account</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="<?php echo base_url('Auth/logout'); ?>"> Log Out </a></li>
            <li></li>
            <li></li>
        </ul>

        <!--div class="all-categories is-hidden-mobile">
            <a href="products.html">Show all categories</a>
            <div class="centered-divider"></div>
        </div-->
    </div>
</div>

<!-- Main wrapper -->
<div class="shop-wrapper">

    <!-- Search overlay -->
    <div class="search-overlay"></div>

    <!-- Search input -->
    <div class="search-input-wrapper is-desktop is-hidden">
        <div class="field">
            <div class="control">
                <input type="text" name="search" autofocus required>
                <span id="clear-search" role="button"><i data-feather="x"></i></span>
                <span class="search-help">Type the name of the product you are looking for</span>
            </div>
        </div>
    </div>
    <!-- Main section -->
    <div class="section">
        <!-- Container -->
        <div class="container">

            <!-- Orders Grid -->
            <div class="columns account-header">
                <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                    <div class="account-title">
                        <h2>DASHBOARD</h2>
                        <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
                    </div>

                    <!-- Account tabs -->
                    <div class="tabs account-tabs has-controls">
                        <ul>
                            <li class="is-active"><a href="#">Dashboard</a></li>
                            <li><a href="#">Account</a></li>
                        </ul>
                    </div>

                    <!-- Orders grid -->
                    <div class="columns is-account-grid is-multiline">
                        <!-- Widget card -->
                        <div class="column is-4">
                            <div class="flat-card order-card has-popover-top">
                                <div class="order-info">
                                    <span><a href="#" onclick="return true">TOTAL REVENUE</a></span>
                                </div>
                                <!-- Progress Circle -->
                                <div class="circle-chart-wrapper">
                                    <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="140" height="140" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="circle-chart-background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                        <circle class="circle-chart-circle" stroke="#0023ff" stroke-width="2" stroke-dasharray="100,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                    </svg>
                                    <!-- Icon -->
                                    <div class="chart-icon">
                                        <span>KSH 115,000</span>

                                    </div>
                                    <!-- Label -->
                                    <div class="ring-title has-text-centered">
                                    </div>
                                </div>
                            </div>

                            <!-- Widget Popover -->
                            <div class="webui-popover-content">
                                <!-- Popover Block -->
                                <div class="popover-flex-block">
                                    <img class="staff-avatar" src="<?php echo base_url(); ?>salon/images/avatars/janet.jpg" alt="">
                                    <div class="content-block">
                                        <label>Order handled by</label>
                                        <span>Don Stefan</span>
                                    </div>
                                </div>
                                <!-- Popover Block -->
                                <div class="popover-flex-block">
                                    <div class="icon-block">
                                    </div>
                                    <div class="content-block">
                                        <label>Tool Tip</label>
                                        <span>You can view the total <b>REVENUE SUMMARY</b> this month by clicking on this widget</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Widget card -->
                        <div class="column is-4">
                            <div class="flat-card order-card has-popover-top">
                                <div class="order-info">
                                    <span><a href="#">PROPERTY AVAILABLE</a></span>
                                </div>
                                <!-- Progress Circle -->
                                <div class="circle-chart-wrapper">
                                    <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="140" height="140" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="circle-chart-background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                        <circle class="circle-chart-circle" stroke="#eda514" stroke-width="2" stroke-dasharray="20,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                    </svg>
                                    <!-- Icon -->
                                    <div class="chart-icon">
                                        <span>5 AVAILABLE</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Widget Popover -->
                            <div class="webui-popover-content">
                                <!-- Popover Block -->
                                <div class="popover-flex-block">
                                    <img class="staff-avatar" src="<?php echo base_url(); ?>salon/images/avatars/janet.jpg" alt="">
                                    <div class="content-block">
                                        <label>Order handled by</label>
                                        <span>Don Stefan</span>
                                    </div>
                                </div>
                                <!-- Popover Block -->
                                <div class="popover-flex-block">
                                    <div class="icon-block">
                                    </div>
                                    <div class="content-block">
                                        <label>Tool Tip</label>
                                        <span>You can view the number of <b>PROPERTIES</b> available to prospective tenants by clicking on this widget</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Widget card -->
                        <div class="column is-4">
                            <div class="flat-card order-card has-popover-top">
                                <div class="order-info">
                                    <span><a href="#">TENANTS REGISTERED</a></span>
                                </div>
                                <!-- Progress Circle -->
                                <div class="circle-chart-wrapper">
                                    <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="140" height="140" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="circle-chart-background" stroke="#efefef" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                        <circle class="circle-chart-circle" stroke="#00b289" stroke-width="2" stroke-dasharray="66,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                    </svg>
                                    <!-- Icon -->
                                    <div class="chart-icon">
                                        <span>30 TENANTS</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Widget Popover -->
                            <div class="webui-popover-content">
                                <!-- Popover Block -->
                                <div class="popover-flex-block">
                                    <img class="staff-avatar" src="<?php echo base_url(); ?>salon/images/avatars/janet.jpg" alt="">
                                    <div class="content-block">
                                        <label>Order handled by</label>
                                        <span>Don Stefan</span>
                                    </div>
                                </div>
                                <!-- Popover Block -->
                                <div class="popover-flex-block">
                                    <div class="icon-block">
                                    </div>
                                    <div class="content-block">
                                        <label>Tool Tip</label>
                                        <span>You can view the number of <b>TENANTS</b> registered in our system by clicking on this widget</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-container">
                        <div class="column is-8 activities">
                            <h2>ACTIVITIES</h2>
                            <!-- Order details -->
                            <div class="table-block animated preFadeInUp fadeInUp">
                                <table>
                                    <thead>
                                    <tr>
                                        <th scope="col">Property Owner</th>
                                        <th scope="col">Property</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Tenant</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td data-label="Product">Dave</td>
                                        <td data-label="SKU">A</td>
                                        <td data-label="Quantity" class="tag is-warning">Pending</td>
                                        <td data-label="Total">Liz</td>
                                        <td data-label="Total">Today</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Product">Jane</td>
                                        <td data-label="SKU">A</td>
                                        <td data-label="Quantity" class="tag is-success">Paid</td>
                                        <td data-label="Total">Mary</td>
                                        <td data-label="Total">Yesterday</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Product">Ken</td>
                                        <td data-label="SKU">B</td>
                                        <td data-label="Quantity" class="tag is-danger">Unpaid</td>
                                        <td data-label="Total">James</td>
                                        <td data-label="Total">Yesterday</td>
                                    </tr>
                                    <tr>
                                        <td data-label="Product">Kamau</td>
                                        <td data-label="SKU">C</td>
                                        <td data-label="Quantity" class="tag is-success">Paid</td>
                                        <td data-label="Total">Ken</td>
                                        <td data-label="Total">Yesterday</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="column is-4 quick-action">
                            <h2>QUICK ACTION</h2>
                            <!--Quick Actions-->
                            <div class="button-wrapper">
                                <button class="button feather-button secondary-button upper-button raised">
                                    <span>New Tenant</span>
                                </button>
                            </div>
                            <div class="button-wrapper">
                                <button class="button feather-button accent-button upper-button raised">
                                    <span>Approve Tenant</span>
                                </button>
                            </div>
                            <div class="button-wrapper">
                                <button class="button feather-button secondary-button upper-button raised">
                                    <span>Add Property Owner</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Orders Grid -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Main section -->
</div>
<!-- /Main wrapper -->