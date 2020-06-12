


<!-- flexslider start -->
<div class="flexslider">
  <ul class="slides">
    <!-- #item start -->

    <?php 
     
        foreach($slide as $s){
    
    ?>

   
    <li style="background:url( <?=$s['url']?>);" >
   
    </li>

        <?php } ?>
    <!-- #item end --> 
   
    <!-- #item end -->
  </ul>
  <ol class="flex-control-nav flex-control-paging">
      <?php $id=1; foreach($slide as $ss){?>
    <li><a href="#" class="flex-active"><?=$id?></a></li>
    
      <?php $id++; }?>
  </ol>
  <ul class="flex-direction-nav">
    <li class="flex-nav-prev"><a href="#" class="flex-prev">Previous</a></li>
    <li class="flex-nav-next"><a href="#" class="flex-next">Next</a></li>
  </ul>
</div>
 <!-- flexslider start #end -->   
    
    
    
    
     <!-- #search-form #start  -->
        <section class="search-form">
   		<div class="container">
        	<div class="row">
        	<h2 class="text-center">Emerge yourself by learning new Skills</h2>
            <form action="<?=base_url('search')?>" method="get" class="form-inline">
                <fieldset>
                    <div class="input-group">
                        <input type="text" name="s" id="search" placeholder="What do you want to learn today" value="" class="form-control" />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-orange btn-medium"><i class="lnr lnr-magnifier"></i> Search</button>
                        </span>
                    </div>
                </fieldset>
            </form><!-- #search-form #end  -->
            
            
            <div class="courses-count">
            	<div class="col-sm-7 col-md-3 wow bounceInLeft"><h3><i class="lnr lnr-graduation-hat"></i> Over 5 Million Students Enrolled</h3> </div>
				<div class="col-sm-7 col-md-3 wow bounceInDown"><h3><i class="lnr lnr-book"></i> More than 25,000 Online Available Courses</h3></div>
				<div class="col-sm-7 col-md-3 wow bounceInUp"><h3><i class="lnr lnr-laptop-phone"></i>Learn skills on any Devices anytime</h3></div>
				<div class="col-sm-7 col-md-3 wow bounceInRight"><h3><i class="lnr lnr-users"></i> More than 5,000 Instructors Registered</h3></div>
            </div>
            </div> <!-- row #end -->
 		</div><!-- #container #end -->
       </section><!-- #search-form #end  -->
       
       
       <div class="sepretor clear text-center"><span>OR</span></div> <!-- sepretor -->
       
       <section class="search-category">
       		<div class="container">
            	<div class="row">
       			<h2 class="text-center">Search By Category</h2>
      		
            <?php

       
?>
            
            <div class="col-xs-12 col-sm-12" >
                <?php  foreach($category as $ct){ ?>
            	 <div class="cat" style="min-height:235px; background:url(<?= $ct['category_image']?>) no-repeat; background-size: 100%; filter: blur(0.5px);">
                	<h3 style="background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4);color: white;
  font-weight: bold;"><a href="<?=base_url("course-category/").$ct['slug']?>"><?=$ct['category_name']?></a></h3>
                    <p style="background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4);color:white;"><?=$ct['category_detail']?></p>
                </div>  <!-- cat third #end -->
                
                
                <?php  }?>
                 </div> <!-- row #end -->
            </div> <!-- #container #end -->
       </section><!-- #search-category #end  -->
       
       
       <!-- #popular-courses #star  -->
       <section class="popular-courses">
       		<div class="container">
            	<div class="row">
            	<div class="course_list">
            	<h2 class="text-center head-border-default">Most Popular Online Courses</h2>
                
               <?php


                    foreach($course_s as $cs){
?>
               
                <!-- course start-->
                <div class="col-xs-12 col-sm-4 zoom">
                	<div class="course">
                	<a href="#" class="img-thumb ">
                    <figure>
                    <video  width="350" height="176" controls="controls">
                    <source src="<?=$cs['short_video']?>" type="video/mp4">
                    Your browser does not support HTML5 video.
                    </video>

                    </figure>
                    </a>
                                      
                    <div class="course_space">
                    <div class="price">$<?=$cs['price']?><span></span></div>
                    <h3><a href="#"><?=$cs['course_name']?></a></h3>
                   
                    <p><?=$cs['course_overview']?></p>
                    
                   
                       
                    	</div>
                	</div> <!--course #end -->
                    </div>  <!--course space #end -->
                </div> <!-- col course #end -->
                    <?php }
                     ?>
                                
                
                <div class="btn-group text-center col-xs-12">
                <a href="<?=base_url('course')?>" class="btn btn-orange btn-medium">Browse all Courses <i class="lnr lnr-arrow-right"></i></a>
                </div>
                
                
               </div>   <!-- #course_list #end  -->
                </div> <!-- row #end -->
            </div><!-- #container #end  -->
       </section><!-- #popular-courses #end  -->
       
       
       
       <section class="why-choose-us text-center parallax" >
       		<div class="layer"> 
        			<div class="container">
                	<div class="row">
                    		<div class="div_hr div_hr1 wow pulse"><span class="alignleft"></span><span class="alignright"></span></div>
                            <div class="div_hr div_hr2 wow pulse"><span class="alignleft"></span><span class="alignright"></span></div>
                    	<h2 class="text-center head-border-default">Why should you choose EducationPress</h2> 
                        
                         <div class="col-xs-12 col-sm-4 wow bounceInLeft">
                         	<i class="lnr lnr-rocket"></i>
                         	<h3>Superfast Support</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing  <br  />
                            and typesetting industry. When an unknown  <br  />
                            printer took a galley of type.</p>
                         </div>
                         
                         <div class="col-xs-12 col-sm-4 wow bounceInUp">
                         	<i class="lnr lnr-laptop-phone"></i>
                         	<h3>Learn on any Device</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing  <br  />
                            and typesetting industry. When an unknown  <br  />
                            printer took a galley of type.</p>
                         </div>
                         
                         
                         <div class="col-xs-12 col-sm-4 wow bounceInRight">
                         	<i class="lnr lnr-license"></i>
                         	<h3>Certification Courses</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing  <br  />
                            and typesetting industry. When an unknown  <br  />
                            printer took a galley of type.</p>
                         </div>
                        
                        
			
	
                    </div>  <!-- row #end  -->
                </div> <!-- container #end  -->
              </div> <!-- layer #end  -->
        </section> <!-- #why-choose-us #end  -->
        
        
        
        
        
        
 
 
 <!-- testimonials slider start-->
 <div id="testimonials" class="carousel slide testimonials_outer">
 
    <div class="container text-center">
        <h2>What People Say</h2>
    </div>
		 
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
            
        <?php

// print_r($testmoni);
foreach($testmoni as $t){

?>
			<!-- First slide -->
			<div class="item active">
          		<div class="container">
                	<div class="row">
                
  
 				<div class="col-xs-12 col-sm-6 col-lg-6">
                	<blockquote class="testimonial">
                    	<p><?= $t['descriptions']?> </p>
                        <footer>
                        	<img src="images/use_img/author_img.png" alt="" />
                            <span><?=$t['name']?></span>
                            <cite>(<?=$t['position']?>)</cite>
                        </footer>
                    </blockquote>
                </div> <!-- col 1 #end -->
                
               	 
                     </div> <!-- row #end -->
                </div> <!-- container #end -->
			</div> <!-- First slide -->
            
<?php } ?>
            
		</div><!-- /.carousel-inner -->

		 <!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#testimonials" data-slide-to="0" class="active"></li>
			<li data-target="#testimonials" data-slide-to="1"></li>
            <li data-target="#testimonials" data-slide-to="2"></li>
		</ol>
	</div>
    
    <!-- testimonials slider #end -->
    
    
<div class="signup-newsletter">
	<div class="container">
    	<div class="row">
             <div class="col-xs-12 col-sm-6">
             <span class="i-email-subscribe"><i class="icon-envelope-letter icons"></i></span>
             <h3>Signup for Newsletter</h3>
             <p>Lorem Ipsum is simply dummy text of the printing contents and typesetting industry.</p>
             </div>
             
             <div class="col-xs-12 col-sm-6">
             	<form method="post" class="sign-form" id="signupform">
	            <input type="email" required placeholder="Your email address" class="form-control" name="EMAIL">
				<button class="btn btn-orange btn-medium" value="Sign up" type="submit">Signup <i class="lnr lnr-arrow-right"></i></button>
                 </form>
            </div>
        </div> 
    </div>
</div> <!-- #signup_newsletter End -->

<footer id="colophon" class="site-footer">
  <div class="container">
     <div class="row">
    	<div class="col-xs-12 col-sm-3 footer-widget">
        	 <aside class="widget widget_text" id="text-1">
             <h6 class="widget-title">About EducationPress</h6>			
             <div class="textwidget">
             <p>Lorem ipsum dolor sit amet, consectet
            ur adipiscing Nunc varius sed dolor 
            sed sagittis will be helpful.</p>
            <p>Morbi quis eros ornare, rhoncus lorem
            efficitur erat. Morbi est at.</p>
            </div>
		</aside>
        </div>
        
      <div class="col-xs-12 col-sm-3 footer-widget">
      		<aside class="widget menu">
            	<h6 class="widget-title">Quick Links</h6>	
            	<ul>
                	<li><a href="#">Courses</a></li>
                    <li><a href="#">Instructor</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Legal Desclaimer</a></li>
                    <li><a href="#">Shortcodes</a></li>
                </ul>
            </aside>
        	 
        </div>
        
        
        <div class="col-xs-12 col-sm-3 footer-widget">
        	 <aside class="widget widget_courses">
             	<h6 class="widget-title">Recent Courses</h6> <ul>
                  <li class="clearfix">
                         <img alt="" class="course-media-img" src="images/use_img/f1.jpg" />
                         <div class="simi-co">
                        <h5><a href="#">Learn to Use jQuery UI Widgets</a></h5>
                        <p>Maecenas cursus mauris libero, a imperdi.</p>
                         </div>
                 </li>
                 <li class="clearfix">
                         <img alt="" class="course-media-img" src="images/use_img/f2.jpg" />
                         <div class="simi-co">
                        <h5><a href="#">Learn to Use jQuery UI Widgets</a></h5>
                         <p>Maecenas cursus mauris libero, a imperdi.</p>
                        </div>
                 </li>
               </ul>
            </aside>
        </div>
        
      
        <div class="col-xs-12 col-sm-3 footer-widget">
        	 <aside class="widget widget_quickcontact">
              <h6 class="widget-title">Quick Contact</h6>
                    <form class="quickcontact" method="post" action="#" >
                       <input type="email" placeholder="Your email address" class="qc-text" size="40" value="" name="your-email">
                       <textarea placeholder="Type your message" aria-invalid="false" class="qc-textarea" rows="10" cols="40" name="your-message"></textarea>
                       <div class="quicksubmit">
                       <input type="submit" class="qc-submit btn btn-default" value="→">
                       </div>
                    </form>
             </aside>
        </div>
    
    </div>
  </div><!--container #end  -->
  
  
 