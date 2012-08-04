<?php

require __DIR__ . '/../src/CodeGun/Ini/Builder.php';

$builder = new \CodeGun\Ini\Builder(array(
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
