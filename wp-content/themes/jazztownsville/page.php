<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jazztownsville
 */

get_header();
?>


<div class="container" style="background-color: #0a1e3d; color: white;">
    <div class="row">
        <?php echo the_content(); ?>
    </div>
</div>

<?php
get_footer();
