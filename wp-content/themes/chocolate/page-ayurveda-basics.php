<?php get_header(); ?>
<?php /* Template Name: Ayurveda Basics */ ?> 
<section id="page-title">
    <div class="container-fluid clearfix">			
        <h1>Ayurveda Basics</h1>				
    </div>
</section>
<section id="content" style="margin-bottom: 0px;">
    <div class="content-wrap">
        <div class="container-fluid clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="entry clearfix">
                        <div class="entry-image">							
                            <h1>Ayurveda Basics</h1>
                            <div id="style-3" class="panel panel-default scrollbarAllPages">

                                <?php
                                while (have_posts()):
                                    the_post();
                                    print_r(get_the_content());
                                endwhile;
                                ?>
                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
