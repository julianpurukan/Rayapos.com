<?php 
	function getNews($category,$kon)
	{
		$get="SELECT 
		berita.id_berita as id,
		CONCAT(berita.tanggal,' ',berita.jam)  as Thetime, 
		berita.gambar as gambar,
		berita.judul as judul  
		FROM berita 
		LEFT JOIN kategori_berita 
		on berita.id_kategori_berita=kategori_berita.id_kategori_berita 
		WHERE aktif='Y'
		AND kategori_berita.aktif='Y'
		AND kategori_berita.aktif='Y'";
		
		$sql_get=mysqli_query($kon,$get);
		$result=array();
		while ($c=mysqli_fetch_array($sql_get)) {
		    array_push($result,array(
		    	'id'=>$c['id'],
		        'time'=>$c['Thetime'],
		        'judul'=>$c['judul'],
		        'gambar'=>$c['gambar'],
		        'id_kategori'=>$c['id_kategori_berita'])
		     );
		}
		return $result;
	}

	function getAllNewsbyMainCategory($category,$kon,$start,$end)
	{
		$get="SELECT 
				berita.id_berita as id, 
				CONCAT(berita.tanggal,' ',berita.jam) as Thetime, 
				berita.gambar as gambar, berita.judul as judul, 
				kategori_berita.nama_kategori as nama_kategori 
				FROM berita 
				LEFT JOIN kategori_berita on berita.id_kategori_berita=kategori_berita.id_kategori_berita WHERE berita.aktif='Y' 
				AND kategori_berita.aktif='Y' 
				AND kategori_berita.id_kategori_berita='$category' 
				order by Thetime DESC LIMIT $start,$end";
		
		$sql_get=mysqli_query($kon,$get);
		$result=array();
		while ($c=mysqli_fetch_array($sql_get)) {
		    array_push($result,array(
		    	'id_berita'=>$c['id'],
		        'time'=>$c['Thetime'],
		        'judul'=>$c['judul'],
		        'gambar'=>$c['gambar'],
		        'nama_kategori'=>$c['nama_kategori'])
		     );
		}

		return $result;
	}
	function getAllHighlitedNewsbyCategory($mainCategory=null,$kon,$start,$end)
	{
		if($mainCategory!=null)
		{
			$get="SELECT 
				reporter.nama_reporter as reporter,
				berita.id_berita as id, 
				CONCAT(berita.tanggal,' ',berita.jam) as Thetime, 
				berita.gambar as gambar, berita.judul as judul, 
				kategori_berita.nama_kategori as nama_kategori 
				FROM berita 
				LEFT JOIN kategori_berita on berita.id_kategori_berita=kategori_berita.id_kategori_berita 
				LEFT JOIN reporter 
				on berita.id_reporter=reporter.id_reporter 
				WHERE 
				kategori_berita.id_kategori_utama='$mainCategory'
				AND berita.aktif='Y' 
				AND kategori_berita.aktif='Y' 
				order by Thetime,berita.dibaca DESC LIMIT $start,$end";
		}
		else{
			$get="SELECT 
				reporter.nama_reporter as reporter,berita.id_berita as id, 
				CONCAT(berita.tanggal,' ',berita.jam) as Thetime, 
				berita.gambar as gambar, berita.judul as judul, 
				kategori_berita.nama_kategori as nama_kategori 
				FROM berita 
				LEFT JOIN kategori_berita 
				on berita.id_kategori_berita=kategori_berita.id_kategori_berita 
				LEFT JOIN reporter 
				on berita.id_reporter=reporter.id_reporter 
				WHERE 
				berita.aktif='Y' 
				AND kategori_berita.aktif='Y' 
				order by Thetime,berita.dibaca DESC LIMIT $start,$end";
		}
		
		$sql_get=mysqli_query($kon,$get);
		$result=array();
		while ($c=mysqli_fetch_array($sql_get)) {
		    array_push($result,array(
		    	'id_berita'=>$c['id'],
		        'time'=>$c['Thetime'],
		        'reporter'=>$c['reporter'],
		        'judul'=>$c['judul'],
		        'gambar'=>$c['gambar'],
		        'nama_kategori'=>$c['nama_kategori'])
		     );
		}

		return $result;
	}
	function getMainCategory($kon)
	{
		$get="SELECT id_kategori_utama,nama_kategori_utama,warna_kategori_utama,warna_text_kategori_utama FROM kategori_utama";
		
		$sql_get=mysqli_query($kon,$get);
		$result=array();
		while ($c=mysqli_fetch_array($sql_get)) {
		    array_push($result,array(
		    	'id_kategori'=>$c['id_kategori_utama'],
		        'nama_kategori_utama'=>$c['nama_kategori_utama'],
		    	'warna_kategori_utama'=>$c['warna_kategori_utama'],
		    	'warna_text_kategori_utama'=>$c['warna_text_kategori_utama'])
		     );
		}
		return $result;
	}
	function getNewsCategory($mainCategory,$kon)
	{
		$get="SELECT id_kategori_berita,nama_kategori FROM kategori_berita WHERE id_kategori_utama='$mainCategory'";
		
		$sql_get=mysqli_query($kon,$get);
		$result=array();
		while ($c=mysqli_fetch_array($sql_get)) {
		    array_push($result,array(
		    	'id_kategori_berita'=>$c['id_kategori_berita'],
		        'nama_kategori'=>$c['nama_kategori'])
		     );
		}
		return $result;
	}


	
	



 ?> 