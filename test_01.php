<?php
/**
 * Created by PhpStorm.
 * User: WcgHades
 * Date: 2017/11/17
 * Time: 9:29
 */
header("Content-Type: text/html;charset=utf-8");
define("MY_NAME",3.14159216);
//echo MY_NAME;

//echo '我的密码:'.MY_NAME;

//===============================
$a = 100;

function test(){
     $b = $GLOBALS['a'] = 200;

    echo $b;
}
test();

echo $a;

function ceshi(){

}

