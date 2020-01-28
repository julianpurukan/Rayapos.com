<?php 
	function baseUrl($url='')
	{
		return 'http://localhost:8080/Rayapos.com/'.$url;
	}
	function asset($url)
	{
		return baseUrl().'assets/'.$url;
	}
	function lib($lib)
	{
		return baseUrl().'lib/'.$lib;
	}
	function avatar($image)
	{
		return 'http://imgu.rayapos.com/'.$image;
	}
	function imagePost($image)
    {
    	$img=str_replace(' ','%20', $image);
        return 'https://imgb.rayapos.com/'.$img;
    }
    function detailPost($id)
    {
    	return baseUrl().$id;
    }


 ?>