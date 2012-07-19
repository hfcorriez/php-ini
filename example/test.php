<?php

$loader = include(__DIR__ . '/../src/bootstrap.php');

$builder = new \Ini\Builder(array(
    'a'        => 'd',
    'b'        => array('test'=> 'c'),
    'database' => array(
        'default' => array(
            'name' => 'db',
            'host' => 'master.db',
            'ip'   => 'dd',
        )
    ),
    'array'    => array('a', '1', 3),
));
echo $builder;
