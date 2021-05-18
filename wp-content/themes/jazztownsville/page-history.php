<?php get_header(); ?>

<div class="container-fluid bg-darked">
    <div class="container">
        <center>
        <div class="py-5 col-md-5 col-sm-5 col-xs-5 col-lg-5">
            <h4 style="font-family: 'Spartan', sans-serif !important; font-weight:700; color:white; font-size: 60px;" class="text-left" style="color: white;">Deep dive <br /> Into the Past</h4>
        </div>
        
        <div class="pb-5 d-flex justify-content-around flex-wrap col-md-10 col-lg-10 col-xs-10 col-sm-10">
            <?php for($x = 1; $x <= 15; $x++) { ?>
                <img class="my-4" src="<?php echo get_template_directory_uri() . '/' . $x . '.jpg' ?>" width="180" height="180" />
            <?php } ?>
        </div>
        </center>
    </div>
</div>

<?php get_footer(); ?>