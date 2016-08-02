<?php get_header(); ?>
<!-- Content
        ============================================= -->
<section id="content" ng-controller="loginRegister">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

                <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Login to your Account</div>
                <div class="acc_content clearfix">
                    <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">
                        <div class="col_full">
                            <label for="login-form-username">Email:</label>
                            <input type="text" id="login-form-username" name="loginUsername" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="login-form-password">Password:</label>
                            <input type="password" id="login-form-password" name="loginPassword" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="login-form-username">Select Language:</label>
                            <select class="form-control">
                                <option value="eng" selected>English</option>
                                <option value="ger">German </option>
                            </select>
                        </div>

                        <div class="col_full nobottommargin">
                            <button class="button button-3d nomargin" id="login-form-submit" onclick="return false"  ng-click="signIn()" name="login-form-submit" value="login">Login
                            <i class="fa fa-spinner fa-spin loginLoader" style="font-size:19px;display:none"></i>
                            </button>
                            <a href="#" class="fright" data-toggle="modal" data-target="#forgotPassword">Forgot Password ?</a>
                        </div>
                    </form>
                </div>

                <div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>New Signup? Register for an Account</div>
                <div class="acc_content clearfix">
                    <form id="registerForm" name="register-form" class="nobottommargin" >
                        <div class="col_full">
                            <label for="register-form-name">Name:</label>
                            <input type="text" id="register-form-name" name="fName" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-email">Email Address:</label>
                            <input type="text" id="register-form-email" name="email" value="" class="form-control" />
                        </div>


                        <div class="col_full">
                            <label for="register-form-phone">Phone:</label>
                            <input type="text" id="register-form-phone" name="phone" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-password">Choose Password:</label>
                            <input type="password" id="register-form-password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-repassword">Re-enter Password:</label>
                            <input type="password" id="register-form-repassword" name="confirmPassword" value="" class="form-control" required="" />
                        </div>

                        <div class="col_full nobottommargin">
                            <button class="button button-3d nomargin" id="register-form-submit" ng-click="signUp()" onclick="return false" name="register-form-submit" value="register">Register Now
                                <i class="fa fa-spinner fa-spin registerLoader" style="font-size:19px;display:none"></i>
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>

</section><!-- #content end -->
<?php get_footer(); ?>
<script src="<?= get_template_directory_uri() ?>/js/ng-custom/login-register.js" type="text/javascript"></script>
<style>
    #register-form-name-error,#register-form-email-error,#register-form-repassword-error,
    #register-form-phone-error,#register-form-password-error,#register-form-dob-error,#register-form-username-error{
        display: block!important;
    }

</style>
