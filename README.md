Intro
=========

Ini Parser and Builder for PHP


Install
==============

Add `codegun/ini` to `composer.json` then install with `composer.phar install`


Namespace
==============

All the classes under `CodeGun\Ini` namespace

- Parser
- Builder


Usage
==============

```php
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
```