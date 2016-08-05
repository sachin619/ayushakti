<?php get_header(); ?>
<?php /* Template Name: Diseases */ ?> 
<section id="content" style="margin-bottom: 0px;">
    <div class="content-wrap">
        <div class="container-fluid clearfix">
            <div class="row">
                <div class="col-md-2 LHScolun">						
                    <form class="search_box" action="#" method="POST">
                        <span class="twitter-typeahead" style="position: relative; display: inline-block;"><input type="text" disabled="" spellcheck="off" autocomplete="off" class="tt-hint" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: rgb(255, 255, 255) none repeat scroll 0% 0%;"><input type="text" placeholder="Search..." class="form-control typeahead-devs tt-query searchBox" name="search" autocomplete="off" spellcheck="false" style="position: relative; vertical-align: top; background-color: transparent;" dir="auto"><span style="position: absolute; left: -9999px; visibility: hidden; white-space: nowrap; font-family: &quot;Lato&quot;,sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: optimizelegibility; text-transform: none;"></span><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span></span>
                    </form>
                    <div class="accordion accordion-bg clearfix">	
                        <?php
                        $getResults = get_terms('diseasesCategory');
                        foreach ($getResults as $getCategory):
                            ?>
                            <div class="acctitle">
                                <i class="acc-closed icon-plus"></i><i class="acc-open icon-remove"></i>
                                <?= $getCategory->name ?>
                            </div>
                            <div class="acc_content clearfix" style="display: none;">
                                <div class="widget widget_links clearfix">
                                    <ul>
                                        <?php
                                        $getType = $api->getDiseases($getCategory->term_id);
                                        foreach ($getType as $getTypeDetails):
                                            $collectPostId[] = $getTypeDetails['id'];
                                            $collectTitle[] = $getTypeDetails['title'];
                                            $getBaseUrl = strtok($_SERVER['REQUEST_URI'], '?');
                                            $createUrl = $getBaseUrl . "?id=" . $getTypeDetails['id'] . "&type=" . $getCategory->term_id;
                                            ?>
                                            <li class="<?= $getTypeDetails['id'] == $_REQUEST['id'] && $getCategory->term_id == $_REQUEST['type'] ? 'selectedCategory' : '' ?>">
                                                <a href="<?= $createUrl ?>"><div><?= $getTypeDetails['title'] ?></div></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>	
                <div class="col-md-10">
                    <?php
                    $selectPostId = isset($_REQUEST['id']) ? $_REQUEST['id'] : $collectPostId[0];
                    $getPostDetails = $api->getDiseasesById($selectPostId)[0];
                    ?>
                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1 ><span class="diseaseTitle"><?= pll_e("AS PER AYURVEDA") ?></span>
                                    <a href="#" onclick="return false" data-toggle="modal" class="getDetail" data-target="#diseasesDetail">
                                        <i class="icon-email2" ></i>
                                    </a>
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
                                <h1 ><span class="diseaseTitle"><?= pll_e("PULSE")?></span>
                                    <a href="#" onclick="return false" data-toggle="modal" class="getDetail" data-target="#diseasesDetail">
                                        <i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['pulse'] ?> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1 ><span class="diseaseTitle"><?= pll_e("SIGNS")?></span>
                                    <a href="#" onclick="return false" data-toggle="modal" class="getDetail" data-target="#diseasesDetail">
                                        <i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['signs'] ?> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1 ><span class="diseaseTitle"><?= pll_e("HERBS")?></span>
                                    <a href="#" onclick="return false" data-toggle="modal" class="getDetail" data-target="#diseasesDetail">
                                        <i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['herbs'] ?> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1 ><span class="diseaseTitle"><?= pll_e("THERAPY")?> </span>
                                    <a href="#" onclick="return false" data-toggle="modal" class="getDetail" data-target="#diseasesDetail">
                                        <i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['therapy'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1 ><span class="diseaseTitle"><?= pll_e("DIET")?></span>
                                    <a href="#" onclick="return false" data-toggle="modal" class="getDetail" data-target="#diseasesDetail">
                                        <i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['diet'] ?>
                                </div>
                            </div>
                        </div>
                    </div>			   

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1 ><span class="diseaseTitle"><?= pll_e("HOME REMEDIES")?> </span>
                                    <a href="#" onclick="return false" data-toggle="modal" class="getDetail" data-target="#diseasesDetail">
                                        <i class="icon-email2"></i></a></h1>
                                <div id="style-3" class="panel panel-default scrollbar">
                                    <?= $getPostDetails['home_remedies'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="entry clearfix">
                            <div class="entry-image">
                                <h1 > <span class="diseaseTitle"><?= pll_e("LIFESTYLE")?></span> 
                                    <a href="#" onclick="return false" data-toggle="modal" class="getDetail" data-target="#diseasesDetail">
                                        <i class="icon-email2"></i></a></h1>
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

<!-- Modal -->
<div id="diseasesDetail" class="modal fade" role="dialog">
    <div class="modal-dialog diseaseModalWidth">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body loadDetail">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>
<script>
    //for left hand side category selection
    $(document).ready(function () {
        $('.selectedCategory').parent().parent().parent().prev().click();
    });
//loading data to modal on select on block
    $(document).on('click', '.getDetail', function () {
        var getHtml = $(this).closest('.entry-image').find('.panel').html();
        var getTitle = $(this).closest('.entry-image').find('.diseaseTitle').html();
        $('.loadDetail').html(getHtml);
        $('.modal-title').html(getTitle);
    })

</script>
<style>
    .diseaseTitle{
        color:grey!important;
        font-size: 16px !important;
    }
    .diseaseModalWidth{
        width:90%;
    }
    .diseaseModalWidth ul {list-style-type: none!important;}
</style>
<script>
    //search functionality
    $(document).ready(function () {
        $('input.typeahead-devs').typeahead({
            name: 'search',
            local:<?php print_r(json_encode(array_values(array_unique($collectTitle)))); ?>
        });
    });
    $(document).on('change', 'input.typeahead-devs', function () {
        var getSelectedVal = $('.tt-is-under-cursor p').html();
        $(".acc_content:contains('" + getSelectedVal + "')").first().prev().click();
    });
</script>

