<?php
function chuyentrang($url,$data=[])
{
    foreach ($data as $key => $value) {
        $_SESSION['redirect_'.$key]=$value;
    }
    header('location: '.$url);
    exit;
}
function redirect_get($key)
{
    $value =  $_SESSION['redirect_'.$key]??'';
    unset($_SESSION['redirect_'.$key]);
    return $value;
}
function dd($mang)
{
   echo '<pre>',var_dump($mang),'</pre>';
   exit;
}
function islogin()
{
    return isset($_SESSION['status_login']) && $_SESSION['status_login'];
}
function msg($msg,$status ='success')
{
    return $msg?'<div class="alert alert-'.$status.'" role="alert">
    '.$msg.'
        </div>':'';
}
function href($controller='hethong',$action='index',$params=[])
{
    $ext = '';
    foreach ($params as $key => $value) {
        $ext .="&$key=$value";
    }
    return "http://localhost/mvc/index.php?controller={$controller}&action={$action}{$ext}";
}

function asset($href)
{
    if($href == '')
    {
        return "public/assets/img/no_img.png";
    }
    return "public/".$href;
}