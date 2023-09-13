<?php
global $post, $tipologia_notizia, $ct, $servizio;

$container_class = "bg-white";
if($ct%2)
	$container_class = "bg-gray-light";

?>

<section class="section <?php echo $container_class; ?> py-5">
	<div class="container">
		<div class="title-section mb-5">
			<h2 class="h4"><?php _e("News", "design_scuole_italia"); ?></h2>
		</div><!-- /title-large -->
		<div class="it-carousel-wrapper carousel-notice it-carousel-landscape-abstract-three-cols splide" data-bs-carousel-splide>
			<div class="splide__track">
				<ul class="splide__list">
					<?php
						$tipologie_notizie = dsi_get_option("tipologie_notizie", "notizie");
						$ct=1;
						if(is_array($tipologie_notizie) && count($tipologie_notizie)){
							foreach ( $tipologie_notizie as $id_tipologia_notizia ) {
								$tipologia_notizia = get_term_by("id", $id_tipologia_notizia, "tipologia-articolo");
								$args = array('post_type' => 'post',
									'posts_per_page' => 3,
												'tax_query' => array(
													array(
														'taxonomy' => 'tipologia-articolo',
														'field' => 'term_id',
														'terms' => $tipologia_notizia->term_id,
													),
												),
								);
								$posts = get_posts($args);
								foreach ($posts as $post){ ?>				
								<li class="splide__slide">
									<div class="it-single-slide-wrapper">
										<?php get_template_part("template-parts/news/card", "vertical-thumb"); ?>
									</div>
								</li>
								<?php } 
							}
						}
					?>
				</ul>
			</div>
		</div><!-- /carousel-large -->
		<div class="pt-3 text-center">
			<a class="text-underline" href="/tipologia-articolo/notizie"><strong>Vedi tutti</strong></a>
		</div>
	</div><!-- /container -->
</section><!-- /section -->