<style>

    .is-account-grid {
        margin-top:20px;
        padding: 0 15px 0 15px;
    }

    hr {
        margin-top: 0;
    }

    textarea {
        height: 200px !important;
        resize: none;
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
                        <h2>EDIT PROPERTY</h2>
                    </div>

                    <!-- Account tabs -->
                    <div class="tabs account-tabs has-controls">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>backend/dashboard">Dashboard</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/owners">Owners</a></li>
                            <li class="is-active"><a href="<?php echo base_url(); ?>backend/properties">Properties</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/tenants">Tenants</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/account">Account</a></li>
                        </ul>
                    </div>

                    <!-- Account layout -->
                    <div class="columns is-account-grid is-multiline">
                        <div class="column is-4">
                            <!-- Upload Avatar -->
                            <div class="flat-card upload-card is-auto">
                                <div class="card-body">
                                    <!-- Avatar form -->
                                    <div id="avatar-upload" class="avatar-wrapper has-simple-popover" data-content="Change profile picture" data-placement="top">
                                        <img class="profile-pic" src="<?php echo base_url(); ?>salon/images/services/bridal.png" alt="">
                                        <div class="upload-button">
                                            <i class="upload-icon" data-feather="plus" aria-hidden="true"></i>
                                        </div>
                                        <input class="file-upload" type="file" accept="image/*"/>
                                    </div>
                                    <!-- /Avatar form -->

                                    <!-- User -->
                                    <div class="username has-text-centered">
                                        <span>Bridal Make-up</span>
                                    </div>

                                    <div class="has-text-centered">
                                        <button class="button feather-button secondary-button will-upload">
                                            Save Thumbnail
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
                                                    <input type="text" class="input is-default" value="Bridal Make-up">
                                                </div>
                                            </div>

                                            <div class="info-block">
                                                <span class="label-text">Type</span>
                                                <div class="control">
                                                    <input type="email" class="input is-default" value="Make-up">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="column is-6">
                                            <div class="info-block">
                                                <span class="label-text">Category</span>
                                                <div class="control">
                                                    <input type="text" class="input is-default" value="Salon">
                                                </div>
                                            </div>

                                            <div class="info-block">
                                                <span class="label-text">Property</span>
                                                <div class="control">
                                                    <input type="text" class="input is-default" value="Tyto's">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="columns">
                                        <div class="column is-6">
                                            <div class="info-block">
                                                <span class="label-text">Price(KSH)</span>
                                                <div class="control">
                                                    <input type="text" class="input is-default" value="2500">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column is-6">
                                            <div class="info-block">
                                                <span class="label-text">Description</span>
                                                <div class="control">
                                                    <textarea class="input is-default" rows="10">Bridal makeup is an essential part of the wedding planning process and designing the perfect look for your wedding day is my number one priority. ... This trend is a divine look for anyone who wants extra definition and their eyes to truly stand out on the day of their wedding.</textarea>
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
        </div>
        <!-- /Container -->
    </div>
    <!-- /Main section -->
</div>
<!-- /Main wrapper -->