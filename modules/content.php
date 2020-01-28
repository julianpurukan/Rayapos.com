<?php 
	include 'Basic/header.php';
	include 'Basic/header_main.php';
	echo "<body class='animsition'>";
	$breadcumb=null;
	switch ($module) {
		case 'home':
				$breadcumb='home';
				include 'Front_page/front_page.php';
			break;
		case 'front_category':
				$breadcumb='category';
				include 'Front_category/front_category.php';
			break;
		case 'front_main_category':
				$breadcumb='main_category';
				include 'Front_main_category/front_main_category.php';
		break;
		case 'news_detail':
				$breadcumb='news_detail';
				include 'News_detail/news_detail.php';
			break;

		default:
			$breadcumb='home';
			include 'Front_page/front_page.php';
			break;
	}
	echo "</body>";
	include 'Basic/footer.php';
 ?>