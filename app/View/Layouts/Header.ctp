<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">

<!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" src="/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" src="/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" src="/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" src="/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
    <link href="/css/common2.css?v=<?= VERSION_CSS ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css?v=<?= VERSION_CSS ?>">
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome/css/font-awesome.css?v=<?= VERSION_CSS ?>">

<!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="/css/style2.css">
    <link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="/css/component.css" />
    <link rel="stylesheet" type="text/css"  href="/css/my.css">
    <link rel="stylesheet" type="text/css" href="/css/slider-pro.min.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/lightgallery.css" >
    <link rel="stylesheet" type="text/css" href="/css/timeline.css">
    <script src="/js/modernizr.js"></script> <!-- Modernizr -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.sliderPro.min.js"></script>
    <script type="text/javascript" href="/js/modernizr.custom.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-8577032-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>

<body class="top-mb">
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand-top" href="/"><img src="/img/FJ_logo.svg" width=130px alt="Funky Jam"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
                <li><a href="/company">Company</a></li>
                <li><a href="/shop">FJ Shop</a></li>
                <li><a href="/recruit">Recruit</a></li>
                <li><a href="/scout">Scout</a></li>
                <li><a href="/studio">Studio</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="http://cooljapanmusic.com/toshi-kubota-update/" target="_blank" ><span style="color:#FF9933;">English</span></a></li>
                <li class="sound-pdg">
                <div id="jquery_jplayer_1"></div><!-- ここにaudioタグが入ります -->
                <div id="jp_container_1"><!-- インターフェース部分 -->
                <div class="track-name"></div>
                <div class="jp-play"></div><!-- 再生 -->
                <div class="jp-pause"></div><!-- 一時停止 -->
                </div></li>
                </ul>
            </div>
        <!-- /.navbar-collapse --> 
        </div>
        <!-- /.container-fluid --> 
    </nav>
                    <?php
                // echo $this->element('sql_dump');
                ?>

<?php
/*
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title><?= $title ?></title>
<meta name="description" content="<?= $description ?>">
<?php
// if ($noindex) {
// 	print '<meta name="robots" content="noindex">';
// }
?>
<?php
// if ($canonical){
// 	$link = preg_replace('/page:[0-9]+/', '', $this->here);
// 	if (isset($this->params->query) && !empty($this->params->query)) {
// 		$link.= '?' . http_build_query($this->params->query, '', '&');
// 	}
        // $link = strtr($link, ['//'=>'/']);
?>
<link rel="canonical" href="https://kclub-rank.com<?= $link ?>">
<?php
// } else {
// 	$link = $this->here;
// }
?>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="stylesheet" href="https://i.icomoon.io/public/d959538b88/kclub-rank/style.css">
</head>
<body>
<header id="header" class="container df mb30">
	<a href="/" class="logo-box">
		<figure class="tac">
		</figure>
	</a>
	<a href="" class="db">
		<figure class="bnr-header tac">
			<img data-src="/img/bnr-ad-936-120.png" alt="スポンサー募集" src="/img/loader.gif" class="ready-img">
			<figcaption class="mt5">スポンサー募集</figcaption>
		</figure>
	</a>
</header-->
<?php 
//if (isset($path)) : ?>
<!--section class="breadcrumb breadcrumb-global mb10">
	<?php
	//print $this->BreadCrumb->show($path) 
	?>
</section -->
<?php 
//endif; 
*/
?>
