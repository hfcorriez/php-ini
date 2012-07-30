<?php

$builder = new \CodeGun\Util\Ini\Builder(array(
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
