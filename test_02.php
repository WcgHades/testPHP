<?php
/**
 * Created by PhpStorm.
 * User: WcgHades
 * Date: 2017/11/17
 * Time: 9:49
 */
header("Content-Type: text/html;charset=utf-8");
/*
$n = 2;
function dg($n){

    echo $n.'<br />';

    $n = $n-1;

    if ($n >0){
        dg($n);
    }else{
        echo '----------------'.'<br />';
    }

    echo '我还没有执行'.$n.'<br />';
}
dg($n);
*/

$arr=array(
    '教学部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
    '宣传部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
    '财务部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
);

foreach($arr as $a => $b){
    echo '-----'.$a.'-----'.'<br />';
    foreach ($b as $c ){
        foreach ($c as $k => $y){
            echo $k.'-------'.$y.'<br />';
        }
    }

}

foreach($arr as $a => $b) {
    echo '-----' . $a . '-----' . '<br />';
    foreach ($b as $c) {
        foreach ($c as $k => $y) {
            echo $y . ',';
        }
        echo '<br />';
    }
}