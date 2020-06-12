
<div class="breadcrumb-section">
	<div class="container">
    	<div class="row">
            <header class="entry-header">
            <h1 class="entry-title">Login</h1>
            </header><!-- .entry-header -->
        </div> <!--row #end  -->
    </div>
</div>
<main id="main" class="site-main col-xs-12">


              <div class="col-xs-6 col-sm-6 register-form form clearfix">
                <h3>Register</h3>
                <form action="<?=base_url("student_post") ?>" method="POST">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Full Name(Will print on Certificate)</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter Full Name">
                 </div>
                 <div class="form-group">
                   <label for="exampleInputb">Birth Date </label>
                   <input type="date" name="dob" class="form-control" id="exampleInputb"  >
                </div>
                <div class="form-group">
                  <label for="country">Country</label>
                  <select class="form-control" id="country" name="country" required>
                    <option value="" selected>--select Country--</option>
                    <?php

                      foreach ($contry as  $value) {
                        ?>
                        <option value="<?=$value['id']?>"><?=$value['name']?></option>
                    <?php  }
                     ?>
                  </select>
               </div>
               <div class="form-group">
                 <label for="state">State</label>
                 <select class="form-control" id="state" name="state">
                   <option>--select State--</option>
                 </select>
              </div>
              <div class="form-group">
                <label for="city">City</label>
                <select class="form-control" id="city" name="city">
                  <option>--select City--</option>
                </select>
             </div>
             <div class="form-group">
               <label for="address">Address</label>
               <textarea class="form-control" placeholder="Enter address" name="address"></textarea>
             </div>
             <div class="form-group">
               <label for="zip">Zip Code</label>
               <input type="text" name="zip" class="form-control" placeholder="Enter zip code">
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
  <script>

         var countySel = document.getElementById("country");
         var stateSel = document.getElementById("state");
         var districtSel = document.getElementById("city");



              countySel.onchange = function () {

                 alert("chnage"+this.value);
                 $.post("<?=base_url('get_state')?>",{county:this.value})
                 .done((data)=>{

                      var obj2 = JSON.parse(data);

                 obj2.forEach(function(object2) {
                   // console.log( + );
                   // console.log(object2);
                   stateSel.options[stateSel.options.length] = new Option(object2.name, object2.id);
                   // stateSel.options[countySel.options.length] = new Option(object2.name, object2.id);
                 });
                });
            }


         stateSel.onchange = function () {
               alert("chnage"+this.value);
                 $.post("<?=base_url('get_city')?>",{state:this.value})
                 .done((data)=>{
                      var obj3 = JSON.parse(data);

                 obj3.forEach(function(object3) {
                   // console.log( + );
                   // console.log(object2);
                 districtSel.options[districtSel.options.length] = new Option(object3.name, object3.id);

                   // stateSel.options[stateSel.options.length] = new Option(object2.name, object2.id);
                   // stateSel.options[countySel.options.length] = new Option(object2.name, object2.id);
                 });
                });


             // for (var city in json[countySel.value]['states'][this.value]['cities'] ){
             //     // alert()
             //     districtSel.options[districtSel.options.length] = new Option(json[countySel.value]['states'][this.value]['cities'][city]['name'], city);
             // }

         }





  </script>
