<?php

get_header();
/* Template Name: Reset Password */
?>
<section id="page-title">
    <div class="container-fluid clearfix">			
        <h1>Reset Password</h1>				
    </div>
</section>
<section id="content" ng-controller="forgotPasswordCtrl" style="margin-bottom: 0px;">
    <div class="content-wrap">
        <div class="container-fluid clearfix">
            <div class="row">

                <div class="content-wrap">

                    <div class="container clearfix">

                        <div style="max-width: 500px;" id="tab-login-register" class="tabs divcenter nobottommargin clearfix ui-tabs ui-widget ui-widget-content ui-corner-all">



                            <div class="tab-container">

                                <div id="tab-login" class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                                    <div class="panel panel-default nobottommargin">
                                        <div style="padding: 40px;" class="panel-body">
                                            <form method="post" action="#" class="nobottommargin" name="forgotPassword" id="forgotPassword">

                                                <h3>Change Your Password</h3>



                                                <div class="col_full">
                                                    <label for="login-form-password">Password:</label>
                                                    <input type="password" class="form-control" value="" ng-model="password" name="password" id="password" required="">
                                                </div>

                                                <div class="col_full">
                                                    <button  class="button loginButton button-3d button-black nomargin" onclick="return false" ng-click="resetPassword()" >Reset Password</button>
                                                    <img ng-src={{loaderSrc}} class="loader" />
                                                </div>

                                                <div ng-if="errorReg != null" class="alert  alert-{{errorReg['errorType']}} col_full nobottommargin">
                                                    {{errorReg['msg']}}
                                                </div>
                                                <div class="customAlert">
                                                    <!-- ngIf: errorLog != null -->
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>

                    </div>

                    <!-- Modal -->

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<script src="<?= get_template_directory_uri() ?>/js/ng-custom/reset-password.js" type="text/javascript"></script>