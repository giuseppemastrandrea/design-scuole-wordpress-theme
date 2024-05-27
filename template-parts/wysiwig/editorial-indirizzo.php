<?php
global $post;

$image_url = get_the_post_thumbnail_url($post, "article-simple-thumb");
$class = dsi_get_post_types_color_class($post->post_type);
$icon = dsi_get_post_types_icon_class($post->post_type);


$excerpt =  dsi_get_meta("descrizione", "", $post->ID);
if(!$excerpt)
    $excerpt = get_the_excerpt($post);

// $argomenti = dsi_get_tipologia_servizio_of_post($post);

?>

<p class="presentation-card-link" href="<?php the_permalink(); ?>">
I corsi di studio dell'Istituto Panetti Pitagora di Bari sono interamente focalizzati sulle discipline tecniche, offrendo agli studenti un percorso formativo di eccellenza nel settore tecnologico. Con una combinazione equilibrata di conoscenze teoriche e competenze pratiche, i nostri corsi preparano gli studenti per le sfide del mondo universitario e professionale, fornendo loro una solida base di apprendimento e un'esperienza pratica significativa. Grazie a docenti qualificati e laboratori all'avanguardia, gli studenti avranno l'opportunità di sviluppare le competenze necessarie per eccellere nei settori dell'informatica, dell'elettronica, dell'elettrotecnica, della chimica e dei materiali. Il nostro obiettivo è quello di formare professionisti altamente qualificati e preparati a cogliere le opportunità nel mondo tecnologico in rapida evoluzione.
</p>