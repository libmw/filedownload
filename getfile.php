<?php
/**
 * @desc抓取远程图片
 * 
 * @param string $url 远程图片路径
 * @param string $filename 本地存储文件名
 */
function grabImage($url, $type = '') {
    if($url == '') {
        return false; //如果 $url 为空则返回 false;
    }
    $ext_name = strrchr($url, '.'); //获取图片的扩展名
    //if($ext_name != '.gif' && $ext_name != '.jpg' && $ext_name != '.bmp' && $ext_name != '.png') {
    //return false; //格式不在允许的范围
    //}
    $filename = '';

    if($filename == '') {
        preg_match('/([^\/]+?\.(?:'.$type.'))$/', $url, $vars);
        $filename = $vars[0]; //
    }
    //代理
    $ctx = stream_context_create(array(
        'http' => array('timeout' => 5,
            'proxy' => 'tcp://127.0.0.1:8087',
            'request_fulluri' => True,)
    ));
    //开始捕获
    ob_start();

    readfile($url, true, $ctx);
    $img_data = ob_get_contents();
    ob_end_clean();
    $size = strlen($img_data);
    $filename= iconv ("UTF-8", "GBK", $filename );
    $local_file = fopen( 'files/'.$filename, 'a');
    fwrite($local_file, $img_data);
    fclose($local_file);
    echo 'success';
}
$url = $_GET['url'];
$type =  $_GET['type'];
grabImage($url, $type);
?>