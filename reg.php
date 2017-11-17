<?php
/**
 * Created by PhpStorm.
 * User: WcgHades
 * Date: 2017/11/17
 * Time: 10:22
 */
header("Content-Type: text/html;charset=utf-8");
/*
$u = $_REQUEST['username'];
echo $u.'<br />';

$passwd = $_REQUEST['pwd'];
echo $passwd.'<br />';
*/
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$fh = $_GET['fh'];
if (!is_numeric($num1) or !is_numeric($num2)){
    echo '请输入数值';
}else{
    if ($fh == 'jia'){
        echo $num1 + $num2;
    }elseif ($fh == 'jian'){
        echo $num1 - $num2;
    }elseif ($fh == 'cheng'){
        echo $num1 * $num2;
    }elseif ($fh == 'chu'){
        echo $num1 / $num2;
    }elseif ($fh == 'qy'){
        echo $num1 % $num2;
    }
}

