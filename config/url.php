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
	function imagePost($img)
    {
        return 'https://imgb.rayapos.com/'.$img;
    }


 ?>