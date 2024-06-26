<?php
/* Template Name: La Storia
 *
 * didattica template file
 *
 * @package Design_Scuole_Italia
 */
global $post;
get_header();

?>
    <main id="main-container" class="main-container redbrown storia-ns">
        <?php get_template_part("template-parts/common/breadcrumb"); ?>
        <?php
        while ( have_posts() ) :
            the_post();
            get_template_part("template-parts/hero/page");

            get_template_part("template-parts/home/timeline");

        endwhile; // End of the loop.
        ?>
    </main>

<?php
get_footer();



