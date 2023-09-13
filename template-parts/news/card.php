<?php
global $progetto;

?>

	<div class="card card-bg card-icon rounded custom-card home-news-card mb-2">
		<a href="<?php echo get_permalink($progetto); ?>">
            <div class="img-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url($progetto->ID) != null ? get_the_post_thumbnail_url($progetto->ID) : "/wp-content/uploads/2023/09/logotipo3-scaled.webp" ?>);background-size: 70%;background-repeat:no-repeat;background-position:center">
            </div>
            <div class="card-body">
                <div class="card-icon-content" id="card-desc-<?php echo $progetto->ID; ?>">
                    <h3><strong><?php echo get_the_title($post); ?></strong></h3>
                    <small><?php echo dsi_get_meta("sottotitolo", '_dsi_progetto_', $progetto->ID); ?></small>
                </div><!-- /card-icon-content -->
            </div><!-- /card-body -->
        </a>
	</div><!-- /card card-bg card-icon rounded -->
<?php