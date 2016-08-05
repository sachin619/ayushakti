<!--========================== Footer ===================-->
<footer id="footer" class="dark">

    <!--========================= Copyrights	==================== -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                <?= pll_e('Copyright © 2009 Ayushakti. All rights reserved') ?> &nbsp; &nbsp; | &nbsp; &nbsp; <a href="#" data-toggle="modal" data-target="#contctUs"><?= pll_e("Contact Us")?></a>
            </div>

            <div class="col_half col_last tright">
                <div class="clear"></div>
                Developed by <a href="#">INFINI SYSTEMS</a>
            </div>

        </div>

    </div><!-- #copyrights end -->




</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Contact Us Modal Start-->
<div id="contctUs" ng-controller="contactUs" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?= pll_e("Contact Us")?></h4>
            </div>
            <div class="modal-body">
                <form role="form" id="contactUs">
                       <div class="form-group">
                        <label for="contactFname"><?= pll_e("Name")?>*</label>
                        <input type="text" name="fname" class="form-control contactFname" id="contactFname" required="">
                    </div>
                    <div class="form-group">
                        <label for="contactEmail"><?= pll_e("Email")?>*</label>
                        <input type="email" name="email" class="form-control contactEmail" id="contactEmail" required="">
                    </div>
                    <div class="form-group">
                        <label for="contactPhone"><?= pll_e("Phone")?></label>
                        <input type="text" name="phone" class="form-control contactPhone" id="contactPhone">
                    </div>
                    <div class="form-group">
                        <label for="contactMessage"><?= pll_e("Description")?>*</label>
                        <textarea name="message" class="form-control contactMessage" id="contactMessage" rows="3" required=""></textarea>
                    </div>
                    <button type="button" ng-click="contactUsSubmit()" class="btn btn-success">Submit <i class="fa fa-spinner fa-spin contactUsLoader" style="font-size:19px;display:none"></i></button>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- Contact Us Modal End-->

<!-- External JavaScripts
============================================= -->
<input type="hidden" id="base_url" value="<?= get_site_url() ?>" />
<script src="<?= get_template_directory_uri() ?>/js/angular.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/plugins.js"></script> 
<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/functions.js"></script>
<script src="<?= get_template_directory_uri() ?>/js/ng-custom/ng-config.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?= get_template_directory_uri() ?>/js/sweetalert.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/plugins.js"></script>	
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/typeahead.js"></script>
<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/functions.js"></script>
<script src="<?= get_template_directory_uri() ?>/js/ng-custom/contact-us.js" type="text/javascript"></script>
</body>
</html>
