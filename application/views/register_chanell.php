
<div class="breadcrumb-section">
	<div class="container">
    	<div class="row">
            <header class="entry-header">
            <h1 class="entry-title">Channel Partner Sign Up</h1>
            </header><!-- .entry-header -->
        </div> <!--row #end  -->
    </div>
</div>

<main id="main" class="site-main col-xs-12">

              <div class="col-xs-6 col-sm-6 register-form form clearfix">
                <h3>Register</h3>
                <form action="<?=base_url("chanel_post") ?>" method="POST">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Full Name of the person or company name (As per the Bank Account)</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter Full Name">
                 </div>
                <div class="form-group">
                  <label for="banktype">Bank Account Type </label>
                  <select name="banktype" id="banktype" class="form-control">
                    <option value="Saving">Saving</option>
                    <option value="Current">Current</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="ac">Account Number</label>
                  <input type="text" name="accountnumber" id="ac" class="form-control" placeholder="Enter Account Number">
                </div>
                <div class="form-group">
                  <label for="ifs">IFS Code</label>
                  <input type="text" name="ifs" class="form-control" id="ifs" placeholder="Enter IFS Code">

                </div>
                <div class="form-group">
                  <label for="bankname">Bank Name</label>
                  <input type="text" name="bankname" class="form-control" id="bankname" placeholder="Enter Bank Name">
                </div>
                <div class="form-group">
                  <label for="branch">Branch</label>
                  <input type="text" name="branch" class="form-control" id="branch" placeholder="Enter Branch ">
                </div>

               <div class="form-group">
                 <label for="mobile">Mobile Number</label>
                 <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile number" pattern="[0-9]{10}">
              </div>

              <div class="form-group">
                <label for="emailid">Email</label>
                <input type="text" class="form-control" name="email" id="emailid"  placeholder="Enter email">
             </div>
             <div class="form-group">
               <label for="whatsapp">Whatsapp Number</label>
               <input type="text" class="form-control" id="whatsapp" name="wnumber" pattern="[0-9]{10}" placeholder="Enter whatsapp number">
            </div>

             <div class="form-group">
               <label for="password-field">Password</label>
               <input type="password" name="passowrd" class="form-control" id="password-field" placeholder="Password">
             <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
             </div>


             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
              </div> <!-- #register-form -->




  </main>
