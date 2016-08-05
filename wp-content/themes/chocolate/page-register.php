<?php get_header(); ?>
<?php /* Template Name: Register */ ?> 
<!-- Content
        ============================================= -->
<section id="content" ng-controller="loginRegister">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

                <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i><?= pll_e('Login to your Account') ?></div>
                <div class="acc_content clearfix">
                    <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">
                        <div class="col_full">
                            <label for="login-form-username"><?= pll_e('Email') ?>:</label>
                            <input type="text" id="login-form-username" name="loginUsername" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="login-form-password"><?= pll_e('Password') ?>:</label>
                            <input type="password" id="login-form-password" name="loginPassword" value="" class="form-control" />
                        </div>

                        <div class="col_full nobottommargin">
                            <button class="button button-3d nomargin" id="login-form-submit" onclick="return false"  ng-click="signIn()" name="login-form-submit" value="login"><?= pll_e('Login') ?>
                                <i class="fa fa-spinner fa-spin loginLoader" style="font-size:19px;display:none"></i>
                            </button>
                            <a href="#" class="fright" data-toggle="modal" data-target="#forgotPasswordModal"><?= pll_e('Forgot Password') ?> ?</a>
                        </div>
                    </form>
                </div>

                <div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i><?= pll_e('New Signup? Register for an Account') ?></div>
                <div class="acc_content clearfix">
                    <form id="registerForm" name="register-form" class="nobottommargin" >
                        <div class="col_full">
                            <label for="register-form-name"><?= pll_e('Name') ?>:</label>
                            <input type="text" id="register-form-name" name="fName" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-email"><?= pll_e('Email') ?>:</label>
                            <input type="text" id="register-form-email" name="email" value="" class="form-control" />
                        </div>


                        <div class="col_full">
                            <label for="register-form-phone"><?= pll_e('Phone') ?>:</label>
                            <input type="text" id="register-form-phone" name="phone" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-password"><?= pll_e('Choose Password') ?>:</label>
                            <input type="password" id="register-form-password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-repassword"><?= pll_e('Re-enter Password') ?>:</label>
                            <input type="password" id="register-form-repassword" name="confirmPassword" value="" class="form-control" required="" />
                        </div>

                        <div class="col_full nobottommargin">
                            <button class="button button-3d nomargin" id="register-form-submit" ng-click="signUp()" onclick="return false" name="register-form-submit" value="register"><?= pll_e("Register Now") ?>
                                <i class="fa fa-spinner fa-spin registerLoader" style="font-size:19px;display:none"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>


    <!-- Contact Us Modal Start-->
    <div id="forgotPasswordModal"  class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?= pll_e("Forgot Password") ?></h4>
                </div>
                <div class="modal-body">
                    <form role="form" id="forgotPasswordForm">
         
                        <div class="form-group">
                            <label for="emailForgot"><?= pll_e("Email") ?>*</label>
                            <input type="email" name="emailForgot" class="form-control emailForgot" id="emailForgot" required="">
                        </div>
                   
                        <button type="button" ng-click="forgotPasswordSubmit()" class="btn btn-success">Submit <i class="fa fa-spinner fa-spin forgotLoader" style="font-size:19px;display:none"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact Us Modal End-->
</section><!-- #content end -->
<?php get_footer(); ?>
<script src="<?= get_template_directory_uri() ?>/js/ng-custom/login-register.js" type="text/javascript"></script>

<style>
    #register-form-name-error,#register-form-email-error,#register-form-repassword-error,
    #register-form-phone-error,#register-form-password-error,#register-form-dob-error,#register-form-username-error{
        display: block!important;
    }

</style>
