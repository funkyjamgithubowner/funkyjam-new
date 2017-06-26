<!-- Header -->
<header class="text-center" name="home">
	<img class="other-banner" src="/img/artist-header-bg-<?= $current ?>.jpg" alt="Funkyjam">
</header>


<div id="breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<?= $this->BreadCrumb->show($path) ?>
			</div>
		
			<?= view::element('part_artist_nav') ?>

			<div id="discography-page-section">
				<p class="artist-tit">Discography</p>
			</div>
			<?php
			// links in this page
			$disctypes  = $this->common->get_disc_types($current);
			print '<ol class="breadcrumb discocenter">';
			foreach($disctypes[$current] as $k => $v) {
				print '<li class="clearfix2"><a href="#' . $k . '">'. $v .'</a></li>';
			}
			print '</ol>';
			?>

			<div class="row topthirty">
			<?php
			foreach ($disctypes[$current] as $k => $v) {
				$d = $data_discs[$k];
				foreach($d as $v1) {
					$v1 = $v1['Discography'];
					if(!empty($v1['img'])){
						print '<div class="col-sm-3 release">';
						print '<img src="/img/portfolio/' . $v1['img'] . '" alt="">';
						print '</div>';
					}
					$release = null;
					print '<div class="col-sm-9">';
					if(!empty($v1['label'])) {
						print '<p>' . $v1['label'] . '</p>';
					}
					print '<p class="DiscographyTitle">' . $v1['title'] . '</p>';
					if(!empty(json_decode($v1['release_multi']))){
						$release = implode("\n", json_decode($v1['release_multi'], true));
						print '<p class="release">' . $release . '</p>';
					}
					if(!empty(json_decode($v1['tracks']))) {
						$tracks = json_decode($v1['tracks'], true);
						// pr($tracks);
						foreach($tracks as $kt => $vt) {
							if($vt['tag'] == 'li'){
								if($kt == 0){
									print '<ol>';
								} else {
									if($tracks[$kt-1]['tag'] != 'li'){
										print '<ol>';
									}	
								}
							}
							$class = ($vt['tag'] == 'p')?'class="bold"':null;
							// pr($vt);
							print $this->common->get_code_tracklist($vt['tt'], $vt['tag'], $class);
							if(isset($tracks[$kt+1])){
								if($tracks[$kt+1] != 'li'){
									print '</ol>';
								}
							}
						}
						if($vt['tag'] == 'li'){
							print '</ol>';
						}
					}
					if(!empty(json_decode($v1['link']))){
						print '<ul>';
						$this->common->get_code_links($v1['link']);
						print '</ul>';
					}
					print '</div>';
				}
			}
			?>
			</div>
		</div>
		<?= view::element('part_side_artist') ?>
	</div>
</div>
<?= view::element('part_artist_news') ?>

