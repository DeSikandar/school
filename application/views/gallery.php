<div class="breadcrumb-section">
	<div class="container">
    	<div class="row">
            <header class="entry-header">
            <h1 class="entry-title">Gallery</h1>
            </header><!-- .entry-header -->
        </div> <!--row #end  -->
    </div>
</div><!-- Breadcrumb #end -->

<div class="page-spacer clearfix"> 
 <div id="primary">
        <div class="container">
        	<div class="row">
                <main id="main" class="site-main col-xs-12">
    
    		 		<div class="text-center gallery-category">
                        <button class="btn-gallery btn-current" >
                            All Images
                        </button>
                        
                     </div>
					 <div class="clearfix"></div>
					 <?php


?>
                     
                     
                     
            	<ul class="thumbnails gallery">

				<?php
					foreach($gallery as $g){
				?>

				<li class="col-xs-12 col-xs-3" >
					<a class="fancybox-effects-a" href="<?=$g['url']?>" rel="next" >
 						<img alt="" src="<?=$g['url']?>"  />
  					</a>
				</li>

					<?php }?>

				
			</ul>
    
    
 					</main><!-- #main -->
             </div> <!-- row -->
         </div> <!-- container -->
  </div><!-- #primary -->
 </div> <!-- page-spacer #end  --> 	  
    
    
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
