<?php

namespace Ini;

class Builder
{
    protected $config;

    /**
     * @param $config
     * @return array
     */
    public static function build($config)
    {
        $ini_lines = array();
        foreach ($config as $key => $value) {
            if (is_array($value)) {
                foreach (static::build($value) as $k => $v) {
                    $ini_lines[$key . '.' . $k] = $v;
                }
            } else {
                $ini_lines[$key] = $value;
            }
        }
        return $ini_lines;
    }

    /**
     * Build String from array
     *
     * @param $config
     * @return string
     */
    public static function buildString($config)
    {
        $lines = static::build($config);
        $string = '';
        foreach ($lines as $k => $v) {
            $string .= "{$k} = {$v}" . PHP_EOL;
        }
        return $string;
    }

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Get as String
     *
     * @return string
     */
    public function get()
    {
        return $this->buildString($this->config);
    }

    /**
     * Save to file
     *
     * @param $file
     * @return int
     */
    public function saveFile($file)
    {
        return file_put_contents($file, $this->get());
    }

    /**
     * To string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->get();
    }
}
