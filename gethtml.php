
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="UTF-8">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>iebook������־���ģ������-ȫ����ȫ����iebook���ģ��,iebookģ�������������</title>
<meta content="������־����ģ��,������־���ģ��,iebook���ģ��,iebook���ģ������,iebook���ģ���������,iebookģ������,iebook�ز�����" name="Keywords" />
<meta content="iebook�ز�����,�ṩȫ����ȫ���µĵ�����־iebook�����������ģ��,iebookģ���������" name="Description" />
</head>
<body>
<?php  
/*  
+-------------------------------------------------------------  
+ץȡ��ҳ����Ĵ���,ֱ�ӿ���������Ƭ��,���Ϊ.php�ļ�ִ�м���.  
+-------------------------------------------------------------  
*/ 
 
error_reporting(7);   
$url = "http://sc.iebook.cn/Soft/List_49_1.html";   
//��ȡָ��url����   
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
 preg_match('/([^\/]+?\.im)/', 'http://xz.iebook.cn:801/UploadFiles/Soft/im2012/iebook_im20120505/750_������.im ', $vars);
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