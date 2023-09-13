<?php
global $post;

?>

	<div class="card card-bg card-icon rounded custom-card home-news-card mb-2">
		<a href="<?php echo get_permalink($post); ?>">
            <div class="date">
                <span class="year"><?php echo date_i18n("Y", strtotime($post->post_date)); ?></span>
                <span class="day"><?php echo date_i18n("d", strtotime($post->post_date)); ?></span>
                <span class="month"><?php echo date_i18n("M", strtotime($post->post_date)); ?></span>
            </div>
            <div class="img-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID) != null ? get_the_post_thumbnail_url($post->ID) : "/wp-content/uploads/2023/09/logotipo3-scaled.webp" ?>);">
            </div>
            <div class="card-body">
                <div class="card-icon-content" id="card-desc-<?php echo $post->ID; ?>">
                    <h3><strong><?php echo get_the_title($post); ?></strong></h3>
                    <small><?php echo dsi_get_meta("sottotitolo", '_dsi_progetto_', $post->ID); ?></small>
                </div><!-- /card-icon-content -->
            </div><!-- /card-body -->
        </a>
	</div><!-- /card card-bg card-icon rounded -->
<?php