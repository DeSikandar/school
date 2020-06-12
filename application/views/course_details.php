<!-- header #end --> 

<div  style=" min-height: 190px;
    background:black no-repeat center;
    background-size: cover;

    color:white;    
    ">
	<div class="container">
    	<div class="row">
            <header class="entry-header">
            <h1 class="entry-title" style="color:white;" >Courses   <?=$course['course_name']?></h1>
            </header><!-- .entry-header -->
        </div> <!--row #end  -->
    </div>
</div><!-- Breadcrumb #end -->








<div class="page-spacer co-detail-page clearfix"> 
 <div id="primary">
        <div class="container">
        	<div class="row">

            <div class="row">
                <main id="main" class="site-main col-xs-12 col-sm-8 left-block">
                	
                     <div class="courses-info">
                     	<h1><?=$course['course_name']?></h1>
                        <p class="excerpt"><?=$course['course_overview']?></p>
                        
                       
                     </div><!--courses-info #end  -->
                	
                    
                     <a class="img-thumb " href="#">
                     <figure>
                       
                       <video  width="100%" height="500" controls="controls">
                       <source src="<?=$course['short_video']?>" type="video/mp4">
                       Your browser does not support HTML5 video.
                   </video>
                       
                       </figure>
                        </a>
                    
                    <div class="courses-info">
                    	<h3>COURSE DESCRIPTION</h3>
                        <p><?=$course['course_detail']?></p>
                        
                <!-- courses-curriculum #start -->    
               <section class="courses-curriculum clearfix">
               		<h3>FAQ</h3>
                 	
                     <?php foreach($faq as $faq){ ?>
                        
                        <h4><?=$faq['fq']?></h4>
                        <ul>
                        <li><?=$faq['fa']?></li>
 						
                        </ul>
                        <?php  }?>
                        
                     
                    
                     
                    
                 </section>
                 <!-- courses-curriculum #end -->
                    
                        
                    <!-- courses-instructor start-->
                  
                 <!-- courses-instructor #end -->
                   
            </div> <!--courses-info #end  -->
                    
       
     <div class="courses-info clearfix">
        
        
        
        
        <div class="add-review clearfix">
        	
        </div>
      </div> <!-- course info #end-->
                      
 </main><!-- #main -->
                
                
             <!-- sidebar start-->
            <div id="secondary" class="widget-area col-xs-12 col-sm-4 left-block" role="complementary">
                <div class="co-join-info">
                <br>
                <br>
                <br>
                
                    
                    <p class="co-price">Price: <span><?=$course['price']?></span></p>
                    
                    <div class="btns">
                        <a class="btn btn-orange btn-medium" data-animation="animated zoomInUp">Enroll This Course </a>		
                       
                    </div>
                    
                    
                
                    
                    <ul>
                        
                        <li><span>Language:</span> <?=$course['language']?> </li>
                  
                        <li><span>Duration:</span> <?=$course['duration']?> Days </li>
                       
                       
                    </ul>
                     
                </div><!-- co-join-info #end -->
                
                
                <aside class="widget widget_courses">
                <h3 class="widget-title">Similar Courses</h3>
                <ul>
                 
                                    <?php

                    // print_r($sim);

                    foreach($sim as $sim){
                        



                    ?>
                    <li class="clearfix">
                    <div class="course-thumbnail">
                    <!-- <img src=""  alt=""> -->
                    <!-- <video src="" class="course-media-img"></video> -->
                    <video  width="320" height="176" controls="controls">
                    <source src="<?=$sim['short_video']?>" type="video/mp4">
                    Your browser does not support HTML5 video.
                    </video>


                    </div>
                    <div class="simi-co">
                    <h5><a href="#"><?=$sim['course_name']?></a></h5>
                    <p class="meta"><a href="#"><?php echo  word_limiter($sim['course_overview'],25) ?></a></p>

                    </div>
                    </li>

                    <?php

                    }
                    ?>


                 
                </ul>
                </aside>
            </div>
        <!-- sidebar #end -->
   
             </div> <!-- row -->
         






