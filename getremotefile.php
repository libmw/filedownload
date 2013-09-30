<?php
//获取指定url内容
	function get_url_content($url){   
		$reg = '/^http:\/\/[^\/].+$/';   
		if (!preg_match($reg, $url)) die($url ." invalid");   
		$fp = fopen($url, "r") or die("Open url: ". $url ." failed.");
        $content = '';
		while($fc = fread($fp, 8192)){   
		$content .= $fc;   
		}   
		fclose($fp);   
		if (empty($content)){   
		die("Get url: ". $url ." content failed.");   
		}   
		return $content;   
	}
	//End  
	function get_formart_file($html, $type){
		preg_match_all('/href\s*=\s*"([^\=\"]*\.(?:'.$type.'))/', $html, $vars);
		echo implode( '|', array_unique( $vars[1])); 
	}
	$url = $_POST['url'];
	$type = $_POST['type'];
	$content = null;
	if(!empty($_POST['content'])){
		get_formart_file($_POST['content'], $type);
	}else{
		get_formart_file(get_url_content($url), $type);
	}
	
	
?>