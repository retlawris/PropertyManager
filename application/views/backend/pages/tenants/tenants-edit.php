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

            <!-- Edit Account -->
            <div class="columns account-header">
                <div class="column is-10 is-offset-1">
                    <!-- Title -->
                    <div class="account-title">
                        <h2>EDIT TENANT</h2>
                    </div>

                    <!-- Account tabs -->
                    <div class="tabs account-tabs has-controls">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>backend/dashboard">Dashboard</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/owners">Owners</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/properties">Properties</a></li>
                            <li class="is-active"><a href="<?php echo base_url(); ?>backend/tenants">Tenants</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/account">Account</a></li>
                        </ul>
                    </div>

                    <!-- Edit Account Layout -->
                    <div class="columns is-account-grid is-multiline">
                        <div class="column is-4">
                            <!-- Upload Avatar -->
                            <div class="flat-card upload-card is-auto">
                                <div class="card-body">
                                    <!-- Avatar form -->
                                    <div id="avatar-upload" class="avatar-wrapper has-simple-popover" data-content="Change profile picture" data-placement="top">
                                        <img class="profile-pic" src="<?php echo base_url(); ?>salon/images/avatars/user.png" alt="">
                                        <div class="upload-button">
                                            <i class="upload-icon" data-feather="plus" aria-hidden="true"></i>
                                        </div>
                                        <input class="file-upload" type="file" accept="image/*"/>
                                    </div>
                                    <!-- /Avatar form -->

                                    <!-- User -->
                                    <div class="username has-text-centered">
                                        <span>Don Stefan</span>
                                    </div>

                                    <div class="has-text-centered">
                                        <button class="button feather-button secondary-button will-upload">
                                            Save picture
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /Upload Avatar -->
                        </div>
                        <div class="column is-8">
                            <!-- Edit contact Info -->
                            <div class="flat-card profile-info-card is-auto">
                                <!-- Title -->
                                <div class="card-title">
                                    <h3>Contact info</h3>
                                    <!-- Save button -->
                                    <div class="confirm-button">
                                        <a href="javascript:void(0);" role="button" class="has-simple-popover" data-content="Save Contact info" data-placement="top"><i class="feather-icons" data-feather="check"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="columns">
                                        <div class="column is-6">
                                            <div class="info-block">
                                                <span class="label-text">Name</span>
                                                <div class="control">
                                                    <input type="text" class="input is-default" value="Name">
                                                </div>
                                            </div>

                                            <div class="info-block">
                                                <span class="label-text">Email</span>
                                                <div class="control">
                                                    <input type="email" class="input is-default" value="Email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="column is-6">
                                            <div class="info-block">
                                                <span class="label-text">Username</span>
                                                <div class="control">
                                                    <input type="text" class="input is-default" value="Username">
                                                </div>
                                            </div>

                                            <div class="info-block">
                                                <span class="label-text">Phone</span>
                                                <div class="control">
                                                    <input type="text" class="input is-default" value="Phone">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Edit contact Info -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Edit Account -->
        </div>
    </div>
    <!-- /Container -->
</div>
<!-- /Main wrapper -->
