<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from nephos.cssninja.io/authentication.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Aug 2018 09:07:21 GMT -->
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> <?php echo $this->config->item('app_name'); ?> </title>
    <link rel="icon" type="image/png" href="salon/images/favicon.png" />

    <!--Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/css/salon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/css/core.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">

    <!-- plugins -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/webuipopover/jquery.webui-popover.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/zoom/zoom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/js/jpcard/card.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/css/chosen/chosen.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>salon/css/icons.min.css">

</head>
<body>

<!-- Style -->
<style>
   
   .shop-wrapper {
    height: 100%;
    min-height: 100vh;
    width: calc(100% - 0px);
    position: relative;
    background: #f0f0f0;
    transition: all .3s;
    margin-left: 0 !important;
} 

</style>


<!-- Pageloader -->
<div class="pageloader"></div>

<!-- Main wrapper -->
<div class="shop-wrapper">


    <!-- Main section -->
    <div class="section">
        <!-- Container -->
        <div class="container">

            <!-- Authentication Layout -->
            <div class="columns account-header is-auth">
                <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                    <!-- Title -->
                    <div class="auth-title">
                        <h2>LOGIN</h2>
                        <a href="index.html" class="button feather-button is-small primary-button upper-button raised is-hidden-mobile">
                            <span>Home</span>
                        </a>
                        <img class="brand-filigrane" src="salon/images/logo/nephos-greyscale.svg" alt="">
                    </div>
                    <!-- Card -->
                    <div class="flat-card is-auto is-auth-form">
                        <div class="columns is-gapless is-flex-mobile">
                            <!-- Image Columns -->
                            <div class="column is-6 has-text-centered image-column is-padded">
                                <div class="store-wrapper">
                                    <img src="salon/images/logo/nephos-white.svg" alt="">
                                    <div class="title">
                                        <?php echo $this->config->item('app_name'); ?>
                                    </div>
                                    <div class="subtitle">An efficient way to Manage your Property</div>
                                </div>
                                <div class="nephos-overlay"></div>
                            </div>
                            <!-- Login/Register form -->
                            <div class="column is-6 is-mobile-padded">

                                <div class="tabs-wrapper animated-tabs">
                                    <!-- Tabs -->
                                    <div class="tabs is-form-tabs">
                                        <ul>
                                            <li class="is-active" data-tab="login"><a>Login</a></li>
                                            <li data-tab="register"><a>Register</a></li>
                                        </ul>
                                    </div>
                                    <!-- Login form -->
                                    <div class="navtab-content is-active">
                                        <form id="login_form"   method="POST" >
                                            <!-- Form Control -->
                                            <div class="control">
                                                <label class="auth-label">Username*</label>
                                                <input type="text"  name="username" class="input" placeholder="">
                                            </div>
                                            <!-- Form Control -->
                                            <div class="control">
                                                <label class="auth-label">Password*</label>
                                                <input type="password"  name="password" class="input" placeholder="">
                                            </div>
                                            <div class="control">
                                                <label class="checkbox-wrap is-small">
                                                    <input id="house" type="checkbox" class="d-checkbox" checked>
                                                    <span></span>
                                                    <small>Remember me?</small>
                                                </label>
                                            </div>
                                            <!-- Form Submit -->
                                            <div class="button-wrapper">
                                                <button type="submit"  id="login_text" class="button feather-button is-small primary-button upper-button raised">
                                                    <span>Login</span>
                                                </button>
                                                <a class="forgotten">Forgot Password ?</a>
                                            </div>

                                            <div class="alert">

                                            </div>
                                        </form>
                                    </div>
                                    <!-- Register form -->
                                    <div id="register" class="navtab-content">
                                        <form>
                                            <!-- Form Control -->
                                            <div class="control">
                                                <label class="auth-label">Email*</label>
                                                <input type="email" class="input" placeholder="">
                                            </div>
                                            <!-- Form Control -->
                                            <div class="control">
                                                <label class="auth-label">Password*</label>
                                                <input type="password" class="input" placeholder="">
                                            </div>
                                            <!-- Form Control -->
                                            <div class="control">
                                                <label class="auth-label">Confirm Password*</label>
                                                <input type="password" class="input" placeholder="">
                                            </div>
                                            <!-- Form Submit -->
                                            <div class="button-wrapper">
                                                <button type="submit" class="button feather-button is-small primary-button upper-button raised">
                                                    <span>Register</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /Login/Register form -->
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>
            <!-- Authentication Layout -->
        </div>
        <!-- /Container -->
    </div>
    <!-- /Main section -->
</div>
<!-- /Main wrapper -->
<script>

    var baseURL="<?php echo base_url();?>";
</script>
<!-- Concatenated plugins -->
<script src="<?php echo base_url(); ?>salon/js/app.js"></script>
<!-- Salon js -->
<script src="<?php echo base_url(); ?>salon/js/salon.js"></script>
<!-- Ajax js -->
<script src="<?php echo base_url(); ?>salon/js/custom.js"></script>

</body>


</html>
