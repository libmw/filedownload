
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="UTF-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>iebook电子杂志组合模板下载-全球最全最新iebook组合模板,iebook模板免费下载中心</title>
<meta content="电子杂志制作模板,电子杂志组合模板,iebook组合模板,iebook组合模板下载,iebook组合模板免费下载,iebook模板下载,iebook素材中心" name="Keywords" />
<meta content="iebook素材中心,提供全球最全最新的电子杂志iebook超级精灵组合模板,iebook模板免费下载" name="Description" />
</head>
<body>
<?php  
/*  
+-------------------------------------------------------------  
+抓取网页标题的代码,直接拷贝本代码片段,另存为.php文件执行即可.  
+-------------------------------------------------------------  
*/ 
 
error_reporting(7);   
$url = "http://sc.iebook.cn/Soft/List_49_1.html";   
//获取指定url内容   
function get_url($url){   
$reg = '/^http:\/\/[^\/].+$/';   
if (!preg_match($reg, $url)) die($url ." invalid");   
$fp = fopen($url, "r") or die("Open url: ". $url ." failed.");   
while($fc = fread($fp, 8192)){   
$content .= $fc;   
}   
fclose($fp);   
if (empty($content)){   
die("Get url: ". $url ." content failed.");   
}   
return $content;   
}   
//echo get_url($url)
 preg_match('/([^\/]+?\.im)/', 'http://xz.iebook.cn:801/UploadFiles/Soft/im2012/iebook_im20120505/750_防缩绒.im ', $vars);
 var_dump( $vars);
//End  
?>  
<script type="text/javascript" src="/core_dom_mall.js"></script>
<script>
var ret = [];
Array.prototype.forEach.call(document.getElementsByTagName('a'),function(o,i){
	if(o.href.indexOf('/2012/') > -1){
		ret.push(o.href)
	}
});
ret = ArrayH.unique(ret);
ret.join('|')

</script>
 </body>
  </html>