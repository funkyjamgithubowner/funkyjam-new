<?php
/**
 * Breadcrumb helper for CAKEPHP
 *
 * PHP versions 4 and 5
 * @filesource
 * @copyright		Copyright 2008- Hideki Hattori
 * @link				http://www.hideblog.net
 * @version			version: 1.1
 * @lastmodified	$Date: 2008-02-15$
 */

App::uses('AppHelper', 'View/Helper');
class BreadCrumbHelper extends AppHelper
{
	var $home = 'Home';	//トップページの名前
	var $homeurl = 'https://' . MYDOMAIN . '/';		//トップページへのURL
	var $homeurl_dev = 'http://' . MYDOMAIN_DEV . '/';    //開発環境トップURL
	var $admin = 'admin';	//このテキストがあれば管理モードと判定
	var $adminurl = '#';	//管理モードトップへのURL
	var $path;

	function show($path)
	{
		$ct['title'] = count($path['title']);
		@$ct['url'] = count($path['url']);

		$this->path = $path;

		if (!empty($path['title'])) {
			switch($ct['title']){
				case 1:
					if($path['title'][0] != ''){
						$breadcrumb = $this->bread1();
					} else {
						$breadcrumb = $this->home();
					}
				break;

				case ($ct['title'] > 1):
					$breadcrumb = $this->breadmulti();
				break;

				default:
					echo "想定外";
				break;
			}
		} else {
			$breadcrumb = $this->home();
		}
		return $breadcrumb;
	}

	function home()
	{
		$breadcrumb = '';
		return $breadcrumb;
	}

	function switchscheme($host) {
		return (isset($_SERVER['HTTPS'])) ? $host : $this->homeurl_dev;
	}

	function bread1()
	{
		$breadcrumb = '';

		$this->homeurl = $this->switchscheme($this->homeurl);

		array_unshift($this->path['title'],$this->home);
		$breadcrumb .= '<ol class="breadcrumb">';
		$breadcrumb .= '<li>';
		$breadcrumb .= '<a href="'.$this->homeurl.'" >' .$this->path['title'][0]. '</a>';
		$breadcrumb .= '</li>';

		// if(ereg($this->admin,$_SERVER['REQUEST_URI'])){
		// 	$breadcrumb .= '<a href="'.$this->adminurl.'">管理モード</a>';
		// }

		$breadcrumb .= '<li class="active">' .$this->path['title'][1]. '</li>';

		$breadcrumb .= '</ol>';

		return $breadcrumb;
	}

	function breadmulti()
	{
		$breadcrumb = '';

		$this->homeurl = $this->switchscheme($this->homeurl);

		// if(ereg($this->admin,$_SERVER['REQUEST_URI'])){
		// 	array_unshift($this->path['title'],'管理モード');
		// 	array_unshift($this->path['url'],$this->adminurl);
		// }

		array_unshift($this->path['title'],$this->home);
		array_unshift($this->path['url'],$this->homeurl);

		$breadcrumb .= '<ol class="breadcrumb">';
		$i = 0;
		$last = count($this->path['title'])-1;
		while($i < count($this->path['title'])){
			if($i != $last){
				$breadcrumb .= '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
				$breadcrumb .= '<a href="'.$this->path['url'][$i].'" itemprop="url"><span itemprop="title">' .$this->path['title'][$i]. '</span></a>';
			} else {
				$breadcrumb .= '<li>';
				$breadcrumb .= '<span class="active">' .$this->path['title'][$i]. '</span>';
			}
			$breadcrumb .= '</li>';
		$i++;
		}

		$breadcrumb .= '</ol>';

		return $breadcrumb;
	}
}
?>