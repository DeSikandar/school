<div class="breadcrumb-section">
	<div class="container">
    	<div class="row">
            <header class="entry-header">
            <h1 class="entry-title">Login</h1>
            </header><!-- .entry-header -->
        </div> <!--row #end  -->
    </div>
</div><!-- Breadcrumb #end -->

<div class="page-spacer clearfix">
	<div id="primary" class="content-area">
       <div class="container">
        	<div class="row">

			<main id="main" class="site-main col-xs-12">

                    <div class="col-xs-12 col-sm-6 login-form form">
                      <h3>Login</h3>

                       <form name="loginform" id="login" method="POST" action="<?=base_url('sing_inpost')?>">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" placeholder="Enter Email" id="email" class="form-control"required>
                        </div>
                          <div class="form-group">
                            <label for="password-field">Password</label>
                            <input type="password" class="form-control" id="password-field" name="password" placeholder="Password" required>
                          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                          </div>

                        <label><a href="#">Forgot Password?</a></label>
                       <input name="submit" id="submit" class="btn btn-default" value="Log In" type="submit">
                      </form>
                    </div> <!-- login form #end -->

				</main><!-- #main -->
			</div> <!-- row -->
         </div> <!-- container -->
  </div>
</div>
