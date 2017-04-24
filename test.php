<?php
/**
 * Created by PhpStorm.
 * User: Slowbro
 * Date: 17/4/22
 * Time: 下午2:37
 */


$string  =  'April 15, 2003' ;
$pattern  =  '/(\w+) (\d+), (\d+)/i' ;
$replacement  =  '${1}1,$3' ;
echo  preg_replace ( $pattern ,  $replacement ,  $string );