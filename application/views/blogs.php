<div class="breadcrumb-section">
	<div class="container">
    	<div class="row">
            <header class="entry-header">
            <h1 class="entry-title">Blog  >  <?=$blog['title']?></h1>
            </header><!-- .entry-header -->
        </div> <!--row #end  -->
    </div>
</div><!-- Breadcrumb #end -->

<div class="page-spacer clearfix">
	<div id="primary" class="content-area">
       <div class="container">
        	<div class="row">

		<main id="main" class="site-main col-xs-12 col-sm-8 left-block">
         
            
            <article class="post sticky hentry"> 
             
              <header class="entry-header">
                <h2 class="entry-title"><a href="#"><?=$blog['title']?></a></h2>
              </header>
              <!-- .entry-header -->
              
              <div class="entry-content">
                <p><?=$blog['descriptions']?> </p>
              </div>
              <!-- entry-content -->
              
             
              
            
              </article>
              <!-- article #end -->


            <?php  ?>
              
              
              
        	
 		</main><!-- main -->
        
        
        <!-- sidebar start-->
       
        
 
			 </div> <!-- row -->
         </div> <!-- container -->
  </div><!-- #primary -->
</div><!-- page-spacer --> 
    
    
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
