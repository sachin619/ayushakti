<!--========================== Footer ===================-->
<footer id="footer" class="dark">

    <!--========================= Copyrights	==================== -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Copyright © 2009 Ayushakti. All rights reserved &nbsp; &nbsp; | &nbsp; &nbsp; <a href="#" data-toggle="modal" data-target="#contctUs">Contact Us</a>
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
<div id="contctUs" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Contact Us</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="subject">Subject*</label>
                        <input type="text" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="description">Description*</label>
                        <textarea class="form-control" id="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
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
</body>
</html>