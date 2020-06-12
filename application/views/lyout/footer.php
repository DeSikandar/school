<div class="container">
  	<div class="row">
        <div class="copyright">
        <p class="copy col-xs-12 col-sm-6">&copy; Copyright 2016. All Rights Reserved by EducationPress.</p>
        <p class="develop col-xs-12 col-sm-3 text-right">Develop by <a href="http://themecycle.com">ThemeCycle.com</a></p>
        </div>
    </div>
  </div>

</footer>
<!-- #colophon -->

<!-- loginform popup start -->
<div id="login-form" style="display:none;">
     <div class="row">
         <h3>Login</h3>
        <p>Please Login to Create a New Course</p>
         <form id="login" action="#" >
            <input name="email" type="text" placeholder="Email or Username" >
            <input name="password" type="text" placeholder="Password" >

            <div class="row remeber">
                <label><input name="rember" type="checkbox" value=""> Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <div class="text-center button">
                <input name="Login" type="button" value="Login Now">
            </div>
        </form>
    </div> <!-- row #end -->
</div> <!-- loginform popup #end -->

<!-- register popup start -->
<div id="register-form" style="display:none;">
     <div class="row">
     <h3>Register</h3>
    <p>Please Register to Create a New Account</p>
     <form id="register" action="#" >
        <input name="name" type="text" placeholder="Name" >
        <input name="username" type="text" placeholder="Username" >
        <input name="email" type="text" placeholder="Email" >
        <input name="password" type="text" placeholder="Password" >
        <input name="confirmpassword" type="text" placeholder="Confirm Password" >

        <div class="row new-login">
             Already have an account? <a href="#">Login to your account! </a>
        </div>
        <div class="text-center button">
        	<input name="create-account" type="button" value="Create an Account">
        </div>
    </form>
    </div>
</div>
<!-- register popup #end -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url() ?>/static/js/jquery.min.js"></script>
<script src="<?=base_url() ?>/static/js/bootstrap.min.js"></script>
<!-- Flexslider js -->
<script src="<?=base_url() ?>/static/vendor/flexslider/jquery.flexslider-min.js"></script>
<!-- Theme js -->
<script src="<?=base_url() ?>/static/js/theme.js"></script>
<!-- Fancybox js -->
<script type="text/javascript" src="<?=base_url() ?>/static/vendor/fancybox/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?=base_url() ?>/static/vendor/fancybox/js/custom.fancybox.js"></script>
<script>
jQuery.noConflict();
jQuery('.fancybox').fancybox();
</script>
<!-- wow animation js -->
<script src="<?=base_url() ?>/static/js/wow.min.js"></script>
<script> new WOW().init(); </script>

<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
</body>
</html>
