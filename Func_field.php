<?php
header('content-type:text/html;charset=UTF-8');
/*封装截取文件扩展名（10种方法）*/

$e=$_GET['ext'];
function extension($ext)
{
    //方法1：
    echo strtolower(pathinfo($ext, PATHINFO_EXTENSION)).'<hr/>';

    //方法2:
    $pos=strripos($ext, '.')+1;//-5+1
    echo strtolower(substr($ext, $pos)).'<hr/>';

    //方法3:
    $pos1=strrev($ext);
    echo strtolower(strrev(substr($pos1, 0, (stripos($pos1, '.'))))).'<hr/>';

    //方法4:
    $len=strlen(strrchr($ext, '.'))-1;
    echo strtolower(substr($ext, $len*-1)).'<hr/>';

    //方法5：
    $pos3=substr($pos1, 0, strlen($pos1)-strlen(strstr($pos1, '.')));
    echo strtolower(strrev($pos3)).'<hr/>';

    //方法6：
    $arr=explode('.', $ext);
    echo strtolower(end($arr)).'<hr/>';

    //方法7：
    $len2=count($arr)-1;
    echo strtolower($arr[$len2]).'<hr/>';

    //方法8：
    $arr1=array_reverse($arr);
    echo strtolower(current($arr1)).'<hr/>';

    //方法9：
    $arr2=array_reverse($arr, true);
    echo strtolower($arr2[$len2]).'<hr/>';

    //方法10：
    echo strtolower(array_shift($arr1)).'<hr/>';
    
    //方法11:
    echo strtolower(array_pop($arr)).'<hr/>';
}
extension($e);
