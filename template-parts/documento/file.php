<?php
global $nomefile, $idfile;

$icon = "svg-documents";
if(substr($nomefile, -3) == "pdf")
	$icon = "it-pdf-document";

$attach = get_post($idfile);
$filetocheck = get_attached_file($idfile);

$filesize = filesize($filetocheck);
?>
	<div class="card card-bg card-icon rounded">
		<div class="card-body">
			<svg class="icon it-pdf-document"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#<?php echo $icon; ?>"></use></svg>
			<div class="card-icon-content">
				<p><strong><a target="_blank" href="<?php echo $attach->guid; ?>"><?php echo $attach->post_title; ?></a></strong></p>
				<small><?php echo intval($filesize/1024); ?> kb</small>
			</div><!-- /card-icon-content -->
		</div><!-- /card-body -->
	</div><!-- /card card-bg card-icon rounded -->
<?php
