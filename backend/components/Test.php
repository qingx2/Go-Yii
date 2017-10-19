<?php
/**
 * User: surprisepeas
 * Date: 2017/10/18 23:14
 */

namespace backend\components;


class Test
{
    public $name;
    private $_age;
    private $_t;

    public function __construct($age, T $t)
    {
        $this->_age = $age;
        $this->_t = $t;
    }
}