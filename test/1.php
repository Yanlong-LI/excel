<?php

include '../vendor/autoload.php';

use PFinal\Excel\Excel;

date_default_timezone_set('PRC');

$data = Excel::readExcelFile('./1.xlsx', ['id' => '编号', 'name' => '姓名', 'date' => '日期']);

array_walk($data, function (&$item) {
    $item['date'] = Excel::convertTime($item['date'], 'Y-m-d');
});

var_dump($data);

/*
$data = [
    ['id'=>1,'name'=>'张三',date=>'2017-07-18'],
    ['id'=>1,'name'=>'李四',date=>'2017-07-19'],
    ['id'=>1,'name'=>'王五',date=>'2017-07-20'],
];
*/