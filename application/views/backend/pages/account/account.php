<style>

    .is-account-grid {
        margin-top:20px;
    }

</style>



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
            <li><a href="<?php echo base_url(); ?>backend/account">Account</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
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

    <!-- Main section -->
    <div class="section">
        <!-- Container -->
        <div class="container">

            <!-- Account Layout -->
            <div class="columns account-header">
                <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                    <!-- Title -->
                    <div class="account-title">
                        <h2>ACCOUNT</h2>
                    </div>

                    <!-- Account tabs -->
                    <div class="tabs account-tabs has-controls">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>backend/dashboard">Dashboard</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/owners">Owners</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/properties">Properties</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/tenants">Tenants</a></li>
                            <li class="is-active"><a href="<?php echo base_url(); ?>backend/account">Account</a></li>
                        </ul>
                    </div>

                    <!-- Account layout -->
                    <div class="columns is-account-grid is-multiline">

                        <div class="column is-5">
                            <!-- User card -->
                            <div class="flat-card profile-card is-auto">
                                <div class="card-body">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>salon/images/avatars/user-geek.png" alt="">
                                    </div>
                                    <div class="username has-text-centered">
                                        <span>Don Stefan</span>
                                    </div>
                                </div>
                                <div class="profile-footer has-text-centered">
                                    <span class="achievement-title">ADMIN</span>
                                </div>
                            </div>
                        </div>
                        <!-- Details -->
                        <div class="column is-7">
                            <div class="flat-card profile-info-card is-auto">
                                <!-- Title -->
                                <div class="card-title">
                                    <h3>Account details</h3>

                                    <div class="edit-account has-simple-popover popover-hidden-mobile" data-content="Edit Account" data-placement="top">
                                        <a href="<?php echo base_url(); ?>backend/account/edit"><i class="feather-icons" data-feather="settings"></i></a>
                                    </div>
                                </div>
                                <!-- Contact Info -->
                                <div class="card-body">
                                    <div class="columns">
                                        <div class="column is-6">
                                            <div class="info-block">
                                                <span class="label-text">Name</span>
                                                <span class="label-value">Don Stefan</span>
                                            </div>

                                            <div class="info-block">
                                                <span class="label-text">Email</span>
                                                <span class="label-value">don.parminter@gmail.com</span>
                                            </div>
                                        </div>

                                        <div class="column is-6">
                                            <div class="info-block">
                                                <span class="label-text">Username</span>
                                                <span class="label-value">donstefan</span>
                                            </div>

                                            <div class="info-block">
                                                <span class="label-text">Phone</span>
                                                <span class="label-value">0719762808</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /Main section -->
</div>
<!-- /Main wrapper -->