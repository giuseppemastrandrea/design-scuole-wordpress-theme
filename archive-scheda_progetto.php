<?php
/**
 * The template for displaying archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#archive
 *
 * @package Design_Scuole_Italia
 */

$class = "petrol";

if(is_post_type_archive("scheda_didattica")){
    $class = "bluelectric";
} else if(is_post_type_archive("scheda_progetto")){
    $class = "bluelectric";
}
get_header();
?>

    <main id="main-container" class="main-container <?php echo $class; ?>>">
		<?php get_template_part("template-parts/common/breadcrumb"); ?>

        <?php get_template_part("template-parts/hero/didattica", "archive"); ?>

        <section class="section bg-white border-top border-bottom d-block d-lg-none">
            <div class="container d-flex justify-content-between align-items-center py-3">
                <h3 class="h6 text-uppercase mb-0 label-filter"><strong><?php _e("Filtri", "design_scuole_italia"); ?></strong></h3>
                <a class="toggle-search-results-mobile toggle-menu menu-search push-body mb-0" href="#">
                    <svg class="svg-filters"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-filters"></use></svg>
                </a>
            </div>
        </section>
        <section class="section bg-gray-light">
            <div class="container">
                <div class="row variable-gutters sticky-sidebar-container">
                    <?php
                    /*
                    <div class="col-lg-3 bg-white bg-white-left">
						<?php get_template_part("template-parts/search/filters", "scheda_progetto"); ?>
                    </div>
                    */
                    ?>
                    <div class="col-lg-8 offset-lg-2 pt84">
						<?php if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/list/article', get_post_type() );

							endwhile;
							?>
                            <nav class="pagination-wrapper" aria-label="Navigazione della pagina">
								<?php echo dsi_bootstrap_pagination(); ?>
                            </nav>
						<?php
						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
                        <?php /*
                        14/08/23 update: get always all projects instead of current year projects
                        <?php if(isset($_GET["archive"]) && ($_GET["archive"] == "true")){ ?>
                            <p><a class="btn btn-block btn-secondary" href="<?php echo get_post_type_archive_link("scheda_progetto"); ?>" ><?php _e("Consulta i progetti dell'anno in corso", "design_scuole_italia"); ?></a></p>
                        <?php }else{ ?>
                            <p><a class="btn btn-block btn-secondary" href="<?php echo get_post_type_archive_link("scheda_progetto"); ?>?archive=true" ><?php _e("Consulta i progetti degli scorsi anni", "design_scuole_italia"); ?></a></p>
                        <?php } ?>
                        */
                        ?>
                    </div><!-- /col-lg-8 -->
                </div><!-- /row -->
            </div><!-- /container -->
        </section>
    </main>

<?php
get_footer();
