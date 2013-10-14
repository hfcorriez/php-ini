<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'codegun\\ini\\builder' => '/CodeGun/Ini/Builder.php',
                'codegun\\ini\\parser' => '/CodeGun/Ini/Parser.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require dirname(__DIR__) . "/src" . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd
