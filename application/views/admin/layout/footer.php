
    </div>

<!-- Jquery JS-->
<script src="<?=base_url()?>static/admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?=base_url()?>static/admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?=base_url()?>static/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?=base_url()?>static/admin/vendor/slick/slick.min.js">
</script>
<script src="<?=base_url()?>static/admin/vendor/wow/wow.min.js"></script>
<script src="<?=base_url()?>static/admin/vendor/animsition/animsition.min.js"></script>
<script src="<?=base_url()?>static/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?=base_url()?>static/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?=base_url()?>static/admin/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?=base_url()?>static/admin/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?=base_url()?>static/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?=base_url()?>static/admin/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?=base_url()?>static/admin/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="<?=base_url()?>static/admin/js/main.js"></script>

<script>
if($('#addbtn')){
$("#addbtn").click(function(){
    var ele=`
        <div id="item">
    <div class="form-group">
                                                    <label for="q" class="control-label mb-1">Question</label>
                                                    <input id="q" name="q[]" type="text" class="form-control" placeholder="Questions " >
                                                    
                                                </div>

                                                <div class="form-group">
                                                    <label for="a" class="control-label mb-1">Answer</label>
                                                    <input id="a" name="a[]" type="text" class="form-control" placeholder="Answer " >
                                                    
                                                </div>
                                                </div>`;


    $("#dynamic").append(ele);

});
}

if($("#removbtn")){
    $("#removbtn").click(function(){
    var element = document.getElementById("item");
    element.parentNode.removeChild(element);
    })
 
}


// addbtn
</script>

</body>

</html>
<!-- end document-->
