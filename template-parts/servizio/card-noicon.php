<?php
global $servizio;
if($servizio->post_status == "publish") {
    ?>
    <div class="card card-bg card-noicon rounded custom-card">
        <a href="<?php echo get_permalink($servizio); ?>">
            <div class="img-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url($servizio->ID) ?>)">
            </div>
            <div class="card-body">
                <div class="card-icon-content" id="card-desc-<?php echo $servizio->ID; ?>">
                    <p><strong><?php echo $servizio->post_title; ?></strong></p>
                    <small><?php echo dsi_get_meta("sottotitolo", '_dsi_servizio_', $servizio->ID); ?></small>
                </div><!-- /card-icon-content -->
            </div><!-- /card-body -->
        </a>
    </div><!-- /card card-bg rounded -->
    <?php
}