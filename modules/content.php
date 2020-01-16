<?php 
	include 'Basic/header.php';
	include 'Basic/header_main.php';
	echo "<body class='animsition'>";
	switch ($module) {
		case 'home':
				include 'Front_page/front_page.php';
			break;
		case 'front_category':
				
				include 'Front_category/front_category.php';
			break;
		case 'news_detail':
				include 'News_detail/news_detail.php';
			break;
		default:
			include 'Front_page/front_page.php';
			break;
	}
	echo "</body>";
	include 'Basic/footer.php';
 ?>