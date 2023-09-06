<?php
global $progetto;

?>

	<div class="card card-bg card-icon rounded custom-card mb-2">
		<a href="<?php echo get_permalink($progetto); ?>">
            <div class="img-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url($progetto->ID) ?>)">
            </div>
            <div class="card-body">
                <div class="card-icon-content" id="card-desc-<?php echo $progetto->ID; ?>">
                    <h3><strong><?php echo $progetto->post_title; ?></strong></h3>
                    <small><?php echo dsi_get_meta("sottotitolo", '_dsi_progetto_', $progetto->ID); ?></small>
                </div><!-- /card-icon-content -->
            </div><!-- /card-body -->
        </a>
	</div><!-- /card card-bg card-icon rounded -->
<?php