<?php 
get_header();
?>


<div class="container-fluid bg-darked">
    <div class="row">
        <div style="color: white;" class="pt-5 pb-3 col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12">
            <center><h1 class="col-sm-4 col-xs-4 col-md-4 col-lg-3" style="text-align:left; font-family: 'Nunito', sans-serif; font-weight:700; font-size: 70px;">Who are <br /> we?</h1>
        </center>
        </div>
        
        
        <center><div class="py-5 col-md-7 col-lg-7 col-sm-7 col-xs-7">
                <?php echo get_the_content(); ?>
        </div></center>
        
    </div>
</div>
    

<?php 
get_footer();
?>