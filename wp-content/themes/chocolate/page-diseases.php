<?php get_header(); ?>
<?php /* Template Name: Diseases */ ?> 
<section id="content" style="margin-bottom: 0px;">
    <div class="content-wrap">
        <div class="container-fluid clearfix">
            <div class="row">
                <div class="col-md-2 LHScolun">						
                    <form class="search_box" action="#" method="POST">
                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" disabled="" spellcheck="off" autocomplete="off" class="tt-hint" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"><input type="text" placeholder="Search..." class="form-control typeahead-devs tt-query" name="search" autocomplete="off" spellcheck="false" style="position: relative; vertical-align: top; background-color: transparent;" dir="auto"><span style="position: absolute; left: -9999px; visibility: hidden; white-space: nowrap; font-family: &quot;Lato&quot;,sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;"></span><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span></span>
                    </form>
                    <div class="accordion accordion-bg clearfix">	
                        <?php
                        $getResults = array_reverse(get_terms('diseasesCategory'));
                        foreach ($getResults as $getCategory):
                            ?>
                            <div class="acctitle"><i class="acc-closed icon-plus"></i><i class="acc-open icon-remove"></i>
                                <a style="color:white" href="#"><?= $getCategory->name ?></a></div>
                            <div class="acc_content clearfix" style="display: none;">
                                <div class="widget widget_links clearfix">
                                    <ul>
                                        <?php
                                        $getType = $api->getDiseases($getCategory->term_id);
                                        foreach ($getType as $getTypeDetails):
                                            $getBaseUrl = strtok($_SERVER['REQUEST_URI'], '?');
                                            $createUrl = $getBaseUrl . "?id=" . $getTypeDetails['id'];
                                            ?>
                                            <li><a href="<?= $createUrl ?>"><div><?= $getTypeDetails['title'] ?></div></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>	
                <div class="col-md-10">
                    <?php
            $getPostDetails=$api->getDiseasesById($_REQUEST['id'])[0];
                    ?>
                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1>AS PER AYURVEDA 
                                    <a class="pull-right" target="_blank" href="viewMore.html"><i class="icon-email2"></i></a>
                                </h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['as_per_ayurveda'] ?> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1>PULSE <a class="pull-right" href="#"><i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['pulse'] ?> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1>SIGNS <a class="pull-right" href="#"><i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['signs'] ?> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1>HERBS <a class="pull-right" href="#"><i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['herbs'] ?> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1>THERAPY <a class="pull-right" href="#"><i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['therapy'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1>DIET <a class="pull-right" href="#"><i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['diet'] ?>
                                </div>
                            </div>
                        </div>
                    </div>			   

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1>HOME REMEDIES <a class="pull-right" href="#"><i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['home_remedies'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1>LIFESTYLE <a class="pull-right" href="#"><i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['lifestyle'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

