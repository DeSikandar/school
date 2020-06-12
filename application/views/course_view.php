



<div  style="
    min-height: 190px;
    background: url(<?=$course[0]['category_image']?>) no-repeat center;
    background-size: cover;
">
	<div class="container">
    	<div class="row">
            <header class="entry-header">
            <h1 class="entry-title " style="color:white">Category  <?= $course[0]['category_name']?></h1>
            </header><!-- .entry-header -->
        </div> <!--row #end  -->
    </div>
</div><!-- Breadcrumb #end -->

<div class="page-spacer clearfix">
 <div id="primary">
        <div class="container">
        	<div class="row">
                <main id="main" class="site-main col-xs-12 col-sm-8 left-block">

          <div class="well well-sm row">



                 <div class="btn-group">
                    <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                    </span></a> <a href="#" id="grid" class="btn btn-default btn-sm active"><span
                        class="glyphicon glyphicon-th"></span></a>
                </div>
            </div>

     <div id="products" class="list-group">
     		<div class="row">


                <?php

                    foreach($course as $course){

                ?>


                <div class="col-xs-12 col-sm-6 zoom courses">
                	<div class="course clist">
                	<a class="img-thumb video_player" href="#">
                    <figure>

                    <video  width="100%" height="265" controls="controls">
                        <source src="<?=$course['short_video']?>" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                    </figure>
                    </a>

                    <div class="course_space">

                    <h3><a href="<?=base_url("course/").$course["seo_url"]?>"><?=$course['course_name']?></a></h3>

                    <p><?php echo word_limiter($course['course_overview'],60 );?></p>


                	</div> <!--course #end -->


                    </div>  <!--course space #end -->
                </div> <!-- course #end -->
                    <?php }?>













            <div class="pagination">
            <span class="page-numbers current">1</span>
            <a href="#" class="page-numbers">2</a>
            <a href="#" class="page-numbers">3</a>
            <a href="#" class="next page-numbers"><i class="fa fa-angle-right"></i></a>
            </div>

        </div> <!-- row #end -->
     </div> <!-- product list #end -->

</main><!-- #main -->



    <!-- sidebar start-->
    <div class="widget-area col-xs-12 col-sm-4 pull-right" id="secondary" >
      <aside class="widget widget_search">
        <h3 class="widget-title">Search Course</h3>
        <form action="<?=base_url('search')?>" class="search-form search-course">
            <input type="search" title="What do you want to learn today?" name="s" value="" placeholder="What do you want to learn today?" class="search-field">
          <button type="submit" class="btn btn-orange btn-medium course-submit"> <i class="lnr lnr-magnifier"></i> </button>
        </form>
      </aside>


      <aside class="widget cp_course_categories">
        <h3 class="widget-title">Category</h3>
        <ul>
        <?php
        foreach($category as $ca){

        ?>
          <li> <a href="<?=base_url("course-category/").$ca['slug']?>"><?=$ca['category_name']?></a>  </li>
        <?php  }?>
        </ul>
      </aside>

     </div>
    <!-- sidebar #end -->


             </div> <!-- row -->
         </div> <!-- container -->
  </div><!-- #primary -->
</div> <!-- page-spacer #end  -->
