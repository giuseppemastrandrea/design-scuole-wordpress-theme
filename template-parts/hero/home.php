<?php
global $post;

$img_identita = dsi_get_option("immagine", "la_scuola");
//$id_scuola_principale = dsi_get_option("scuola_principale", "homepage");
$landing_url = dsi_get_template_page_url("page-templates/la-scuola.php");

$colid=12;
$showimage = true;
if($img_identita == ""){
    // se non è stata caricata una immagine apro a schermo pieno
    $colid = 12;
    $showimage = false;
}
?><section id="section" class="section bg-redbrown section-hero-left">
    <div class="video-container">
        <style>
            #section{
                position: relative;
                min-height: 56.25vw;
            }

            #editorial{
                position: relative;
                z-index: 1000;
            }

            .video-container{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .video-container::after{
                content: "";
                background: rgba(0, 0, 0, 0.5);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 100;
            }

            .video-container iframe {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                min-height: 63.5vw; /* 56.25 * 1.2 */
                transform: translate(-50%, -56%);
            }
        </style>
        <iframe 
            id="video-background" 
            src="https://www.youtube.com/embed/wqORCz1onFM?controls=0&autoplay=1&mute=1&playsinline=1&playlist=wqORCz1onFM&loop=1"
            frameborder="0" 
            allowfullscreen>
        </iframe>
    </div>
    <div class="container" id="editorial">
        <div class="row variable-gutters">
            <div class="col-md-<?php echo $colid; ?>">
                <div class="hero-title text-center">
                    <div class="text-white font-weight-normal h4"><?php echo dsi_get_option("tipologia_scuola"); ?> </div>
                    <h1><span class="d-line d-xl-block"><?php echo dsi_get_option("nome_scuola"); ?></span> </h1>
                    <h2 class="text-white font-weight-normal h3"><?php echo dsi_get_option("luogo_scuola"); ?></h2>
                    <?php if($landing_url){ ?>
                        <a class="btn btn-sm btn-outline-white mt-4" href="<?php echo $landing_url; ?>" aria-label="Vai alla scuola"><?php _e("Vai alla scuola", "design_scuole_italia"); ?></a>
                    <?php } ?>
                    

                </div><!-- /hero-title -->
            </div><!-- /col-md-6 -->
        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /section -->